<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\PostResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Firefly\FilamentBlog\Enums\PostStatus;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Blog Management';

    protected static ?string $navigationLabel = 'Posts';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $state, callable $set) => $set('slug', Str::slug($state))),
                        
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        
                        Forms\Components\TextInput::make('sub_title')
                            ->maxLength(255)
                            ->label('Sub Title'),
                        
                        Forms\Components\Select::make('status')
                            ->options([
                                'published' => 'Published',
                                'scheduled' => 'Scheduled',
                                'pending' => 'Pending',
                            ])
                            ->default('pending')
                            ->required(),
                        
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->visible(fn (callable $get) => in_array($get('status'), ['published', \Firefly\FilamentBlog\Enums\PostStatus::PUBLISHED])),
                        
                        Forms\Components\DateTimePicker::make('scheduled_for')
                            ->label('Scheduled For')
                            ->visible(fn (callable $get) => in_array($get('status'), ['scheduled', \Firefly\FilamentBlog\Enums\PostStatus::SCHEDULED])),
                    ])->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('body')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'bulletList',
                                'orderedList',
                                'h2',
                                'h3',
                                'h4',
                                'h5',
                                'h6',
                                'blockquote',
                                'codeBlock',
                                'undo',
                                'redo',
                            ]),
                    ]),

                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('cover_photo_path')
                            ->label('Cover Photo')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('blog/covers'),
                        
                        Forms\Components\TextInput::make('photo_alt_text')
                            ->label('Photo Alt Text')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Categories & Tags')
                    ->schema([
                        Forms\Components\Select::make('categories')
                            ->multiple()
                            ->relationship('categories', 'name')
                            ->preload()
                            ->searchable(),
                        
                        Forms\Components\Select::make('tags')
                            ->multiple()
                            ->relationship('tags', 'name')
                            ->preload()
                            ->searchable()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(155),
                            ]),
                    ])->columns(2),

                Forms\Components\Section::make('SEO Details')
                    ->schema([
                        Forms\Components\TextInput::make('seo.title')
                            ->label('SEO Title')
                            ->maxLength(255),
                        
                        Forms\Components\Textarea::make('seo.description')
                            ->label('SEO Description')
                            ->maxLength(500)
                            ->rows(3),
                        
                        Forms\Components\TagsInput::make('seo.keywords')
                            ->label('SEO Keywords'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_photo_path')
                    ->label('Cover')
                    ->circular()
                    ->size(50),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn ($state): string => match ($state) {
                        'published' => 'success',
                        'scheduled' => 'warning',
                        'pending' => 'danger',
                        default => 'gray',
                    }),
                
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Author')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'published' => 'Published',
                        'scheduled' => 'Scheduled',
                        'pending' => 'Pending',
                    ]),
                
                Tables\Filters\SelectFilter::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
