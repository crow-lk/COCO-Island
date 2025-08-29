<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\ShareSnippetResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\ShareSnippet;

class ShareSnippetResource extends Resource
{
    protected static ?string $model = ShareSnippet::class;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    protected static ?string $navigationGroup = 'Blog Management';

    protected static ?string $navigationLabel = 'Share Snippets';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Share Snippet Information')
                    ->schema([
                        Forms\Components\Toggle::make('active')
                            ->label('Active')
                            ->default(true),
                        
                        Forms\Components\Textarea::make('script_code')
                            ->label('Script Code')
                            ->required()
                            ->rows(8)
                            ->columnSpanFull()
                            ->placeholder('Enter your JavaScript, CSS, or HTML code here...'),
                        
                        Forms\Components\Textarea::make('html_code')
                            ->label('HTML Code')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull()
                            ->placeholder('Enter the HTML code that will be displayed...'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('active')
                    ->boolean()
                    ->label('Active'),
                
                Tables\Columns\TextColumn::make('script_code')
                    ->label('Script Code')
                    ->limit(100)
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('html_code')
                    ->label('HTML Code')
                    ->limit(100)
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('active')
                    ->label('Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('toggle_status')
                    ->icon('heroicon-o-power')
                    ->color(fn (ShareSnippet $record) => $record->active ? 'danger' : 'success')
                    ->label(fn (ShareSnippet $record) => $record->active ? 'Deactivate' : 'Activate')
                    ->requiresConfirmation()
                    ->action(function (ShareSnippet $record) {
                        $record->update([
                            'active' => !$record->active,
                        ]);
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('activate')
                        ->icon('heroicon-o-power')
                        ->color('success')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['active' => true]);
                            });
                        }),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->icon('heroicon-o-power')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $records->each(function ($record) {
                                $record->update(['active' => false]);
                            });
                        }),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShareSnippets::route('/'),
            'create' => Pages\CreateShareSnippet::route('/create'),
            'edit' => Pages\EditShareSnippet::route('/{record}/edit'),
        ];
    }
}
