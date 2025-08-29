<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Comment;
use Firefly\FilamentBlog\Models\NewsLetter;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Firefly\FilamentBlog\Enums\PostStatus;

class BlogStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Post::count())
                ->description('All blog posts')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),

            Stat::make('Published Posts', Post::whereIn('status', ['published', \Firefly\FilamentBlog\Enums\PostStatus::PUBLISHED])->count())
                ->description('Currently published')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Pending Posts', Post::where('status', 'pending')->count())
                ->description('Awaiting review')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Total Comments', Comment::count())
                ->description('All comments')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('info'),

            Stat::make('Approved Comments', Comment::where('approved', true)->count())
                ->description('Approved comments')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Newsletter Subscribers', NewsLetter::where('subscribed', true)->count())
                ->description('Active subscribers')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),

            Stat::make('Categories', Category::count())
                ->description('Blog categories')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->color('primary'),

            Stat::make('Tags', Tag::count())
                ->description('Blog tags')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),
        ];
    }
}
