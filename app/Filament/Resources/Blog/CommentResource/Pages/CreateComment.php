<?php

namespace App\Filament\Resources\Blog\CommentResource\Pages;

use App\Filament\Resources\Blog\CommentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateComment extends CreateRecord
{
    protected static string $resource = CommentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
