<?php

namespace App\Filament\Resources\Blog\ShareSnippetResource\Pages;

use App\Filament\Resources\Blog\ShareSnippetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateShareSnippet extends CreateRecord
{
    protected static string $resource = ShareSnippetResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
