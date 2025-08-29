<?php

namespace App\Filament\Resources\Blog\ShareSnippetResource\Pages;

use App\Filament\Resources\Blog\ShareSnippetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShareSnippet extends EditRecord
{
    protected static string $resource = ShareSnippetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
