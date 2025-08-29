<?php

namespace App\Filament\Resources\Blog\BlogSettingResource\Pages;

use App\Filament\Resources\Blog\BlogSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogSetting extends EditRecord
{
    protected static string $resource = BlogSettingResource::class;

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
