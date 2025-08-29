<?php

namespace App\Filament\Resources\Blog\ShareSnippetResource\Pages;

use App\Filament\Resources\Blog\ShareSnippetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShareSnippets extends ListRecords
{
    protected static string $resource = ShareSnippetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
