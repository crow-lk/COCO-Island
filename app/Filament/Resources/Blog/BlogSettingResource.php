<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\BlogSettingResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\Setting;

class BlogSettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Blog Management';

    protected static ?string $navigationLabel = 'Settings';

    protected static ?int $navigationSort = 7;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Blog Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Blog Title')
                            ->maxLength(155),
                        
                        Forms\Components\Textarea::make('description')
                            ->label('Blog Description')
                            ->rows(3),
                        
                        Forms\Components\TextInput::make('organization_name')
                            ->label('Organization Name')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Branding')
                    ->schema([
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('blog/branding'),
                        
                        Forms\Components\FileUpload::make('favicon')
                            ->label('Favicon')
                            ->image()
                            ->disk('public')
                            ->directory('blog/branding'),
                    ])->columns(2),

                Forms\Components\Section::make('Analytics & Tracking')
                    ->schema([
                        Forms\Components\Textarea::make('google_console_code')
                            ->label('Google Search Console Code')
                            ->rows(2),
                        
                        Forms\Components\Textarea::make('google_analytic_code')
                            ->label('Google Analytics Code')
                            ->rows(3),
                        
                        Forms\Components\Textarea::make('google_adsense_code')
                            ->label('Google AdSense Code')
                            ->rows(3),
                    ])->columns(1),

                Forms\Components\Section::make('Quick Links')
                    ->schema([
                        Forms\Components\Repeater::make('quick_links')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Link Title')
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label('Link URL')
                                    ->url()
                                    ->required(),
                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->reorderable(false)
                            ->collapsible(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Blog Title')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('organization_name')
                    ->label('Organization')
                    ->searchable(),
                
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->circular()
                    ->size(50),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ])
            ->defaultSort('updated_at', 'desc');
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
            'index' => Pages\ListBlogSettings::route('/'),
            'edit' => Pages\EditBlogSetting::route('/{record}/edit'),
        ];
    }
}
