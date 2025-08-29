<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Firefly\FilamentBlog\Models\Comment;
use Firefly\FilamentBlog\Models\NewsLetter;
use Firefly\FilamentBlog\Models\ShareSnippet;
use Firefly\FilamentBlog\Enums\PostStatus;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->with(['categories', 'tags', 'user'])
            ->latest('published_at')
            ->paginate(10);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        $recentPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('blog.index', compact('posts', 'categories', 'tags', 'recentPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->with(['categories', 'tags', 'user', 'seo'])
            ->firstOrFail();

        $comments = Comment::where('post_id', $post->id)
            ->where('approved', true)
            ->with('user')
            ->latest()
            ->get();

        $relatedPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($query) use ($post) {
                $query->whereIn('categories.id', $post->categories->pluck('id'));
            })
            ->with(['categories', 'tags', 'user'])
            ->limit(3)
            ->get();

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        $recentPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('blog.show', compact('post', 'comments', 'relatedPosts', 'categories', 'tags', 'recentPosts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $posts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->whereHas('categories', function ($query) use ($category) {
                $query->whereIn('categories.id', $category->id);
            })
            ->with(['categories', 'tags', 'user'])
            ->latest('published_at')
            ->paginate(10);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        $recentPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('blog.category', compact('category', 'posts', 'categories', 'tags', 'recentPosts'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        
        $posts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->whereHas('tags', function ($query) use ($tag) {
                $query->whereIn('tags.id', $tag->id);
            })
            ->with(['categories', 'tags', 'user'])
            ->latest('published_at')
            ->paginate(10);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        $recentPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('blog.tag', compact('tag', 'posts', 'categories', 'tags', 'recentPosts'));
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:fblog_posts,id',
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => auth()->id() ?? 1, // Default user ID if not authenticated
            'comment' => $request->comment,
            'approved' => false, // Comments need approval by default
        ]);

        return back()->with('success', 'Comment submitted successfully and awaiting approval.');
    }

    public function subscribeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:fblog_news_letters,email',
        ]);

        NewsLetter::create([
            'email' => $request->email,
            'subscribed' => true,
        ]);

        return back()->with('success', 'Successfully subscribed to newsletter!');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        
        $posts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('body', 'like', "%{$query}%")
                  ->orWhere('sub_title', 'like', "%{$query}%");
            })
            ->with(['categories', 'tags', 'user'])
            ->latest('published_at')
            ->paginate(10);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        $recentPosts = Post::whereIn('status', ['published', PostStatus::PUBLISHED])
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('blog.search', compact('posts', 'categories', 'tags', 'recentPosts', 'query'));
    }
}
