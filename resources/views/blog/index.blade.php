@extends('blog.layout')

@section('title', 'Blog - COCO Island Holidays')
@section('description', 'Discover amazing blog posts and travel stories from COCO Island Holidays.')

@section('content')
<!-- page title area start -->
<section class="page-title">
    <div class="page-title-inner d-flex align-items-center text-center" data-background="{{ asset('frontend/assets/img/page_title/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="page-breadcrumb">
                        <h1>BLOG</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- blog area start -->
<section class="blog-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="blog-wrapper">
                    @forelse($posts as $post)
                    <div class="single-blog mb-50">
                        <div class="blog-img">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <img src="{{ asset('storage/' . $post->cover_photo_path) }}" alt="{{ $post->photo_alt_text }}">
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                                <span><a href="#">BY : {{ $post->user->name }}</a></span>
                                @if($post->categories->count() > 0)
                                <span><a href="{{ route('blog.category', $post->categories->first()->slug) }}">{{ $post->categories->first()->name }}</a></span>
                                @endif
                            </div>
                            <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                            @if($post->sub_title)
                            <p class="text-muted mb-3">{{ $post->sub_title }}</p>
                            @endif
                            <p>{!! Str::limit(strip_tags($post->body), 200) !!}</p>
                            
                            @if($post->tags->count() > 0)
                            <div class="blog-tags mt-3">
                                @foreach($post->tags->take(3) as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="badge badge-secondary mr-2">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            @endif
                            
                            <div class="blog-btn">
                                <a href="{{ route('blog.show', $post->slug) }}" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-5">
                        <h3>No blog posts found</h3>
                        <p class="text-muted">Check back later for new content!</p>
                    </div>
                    @endforelse

                    <!-- Pagination -->
                    @if($posts->hasPages())
                    <div class="pagination-wrapper">
                        {{ $posts->links() }}
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4">
                <div class="blog-sidebar">
                    <!-- Search Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">SEARCH</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="search-form-sidebar">
                                <form action="{{ route('blog.search') }}" method="GET">
                                    <input type="text" name="q" placeholder="Search posts..." value="{{ request('q') }}">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">CATEGORIES</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="sidebar-catagory">
                                <ul>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                                        <span class="f-right">({{ $category->posts_count }})</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Tags Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">Tags</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="sidebar-tags">
                                @foreach($tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->
@endsection
