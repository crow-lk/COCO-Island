<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourResource\Pages;
use App\Filament\Resources\TourResource\RelationManagers;
use App\Filament\Resources\Traits\HandlesImages;
use App\Models\Tour;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TourResource extends Resource
{
    use HandlesImages;
    protected static ?string $model = Tour::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    
    protected static ?string $navigationGroup = 'Content';
    
    protected static ?string $navigationLabel = 'Tours & Packages';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1) // Set form to use full width
            ->schema([
                Forms\Components\Tabs::make('Tabs')
                    ->columnSpanFull() // Ensure tabs span full width
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Basic Information')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Forms\Set $set, $state) {
                                        $set('slug', Str::slug($state));
                                        $set('meta_title', $state);
                                    }),
                                    
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                                    
                                Forms\Components\TextInput::make('subtitle')
                                    ->maxLength(255),
                                    
                                Forms\Components\TextInput::make('duration')
                                    ->maxLength(255)
                                    ->placeholder('e.g., 7 Days / 6 Nights'),
                                    
                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->rows(3)
                                    ->maxLength(500),
                                    
                                self::imageUpload('image_path', 'Tour Image', 'tour-images'),
                                
                                self::imageUpload('hero_image', 'Hero Image', 'tour-hero-images'),
                                
                                Forms\Components\TextInput::make('route_name')
                                    ->label('Route Name')
                                    ->helperText('e.g., tours.ramayana')
                                    ->maxLength(255),
                            ]),
                            
                        Forms\Components\Tabs\Tab::make('Tour Content')
                            ->schema([
                                Forms\Components\RichEditor::make('content')
                                    ->label('Tour Content')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'heading',
                                        'bulletList',
                                        'orderedList',
                                        'redo',
                                        'undo',
                                    ])
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('tour-content-images'),
                                
                                Forms\Components\Repeater::make('highlights')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(100),
                                        Forms\Components\TextInput::make('icon')
                                            ->label('Font Awesome Icon Class')
                                            ->placeholder('fa-place-of-worship')
                                            ->helperText('Enter the Font Awesome icon class without the "fas" prefix'),
                                        Forms\Components\Textarea::make('description')
                                            ->rows(2)
                                            ->maxLength(200),
                                    ])
                                    ->columns(3)
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
                                
                                Forms\Components\Repeater::make('why_youll_love_it')
                                    ->schema([
                                        Forms\Components\Textarea::make('reason')
                                            ->required()
                                            ->rows(2)
                                            ->maxLength(200),
                                    ])
                                    ->columns(1)
                                    ->collapsible(),
                            ]),
                        
                        Forms\Components\Tabs\Tab::make('SEO & Display Settings')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(70)
                                    ->helperText('Optimal length: 50-60 characters'),
                                
                                Forms\Components\Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(2)
                                    ->maxLength(160)
                                    ->helperText('Optimal length: 150-160 characters'),
                                
                                Forms\Components\Toggle::make('is_popular')
                                    ->label('Show in Popular Tours')
                                    ->default(true),
                                
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true),
                                    
                                Forms\Components\Toggle::make('show_in_menu')
                                    ->label('Show in Navigation Menu')
                                    ->default(false),
                                    
                                Forms\Components\TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->numeric()
                                    ->default(0),
                                    
                                Forms\Components\TextInput::make('menu_order')
                                    ->label('Menu Order (if shown in menu)')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ])
                    ->activeTab(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50)
                    ->wrap(),
                Tables\Columns\TextColumn::make('route_name')
                    ->label('Route'),
                Tables\Columns\ToggleColumn::make('is_popular')
                    ->label('Popular')
                    ->onColor('warning')
                    ->offColor('gray'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active')
                    ->onColor('success')
                    ->offColor('danger'),
                Tables\Columns\TextColumn::make('display_order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('display_order')
            ->filters([
                Tables\Filters\SelectFilter::make('is_popular')
                    ->label('Popular Status')
                    ->options([
                        '1' => 'Popular',
                        '0' => 'Not Popular',
                    ]),
                Tables\Filters\SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('toggleActive')
                    ->label('Toggle Active')
                    ->icon('heroicon-o-check-circle')
                    ->color(fn (Tour $record): string => $record->is_active ? 'success' : 'danger')
                    ->action(function (Tour $record): void {
                        $record->update([
                            'is_active' => !$record->is_active,
                        ]);
                    }),
                Tables\Actions\Action::make('togglePopular')
                    ->label('Toggle Popular')
                    ->icon('heroicon-o-star')
                    ->color(fn (Tour $record): string => $record->is_popular ? 'warning' : 'gray')
                    ->action(function (Tour $record): void {
                        $record->update([
                            'is_popular' => !$record->is_popular,
                        ]);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('togglePopular')
                        ->label('Toggle Popular Status')
                        ->icon('heroicon-o-star')
                        ->action(function (\Illuminate\Database\Eloquent\Collection $records): void {
                            foreach ($records as $record) {
                                $record->update([
                                    'is_popular' => !$record->is_popular,
                                ]);
                            }
                        })
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\BulkAction::make('toggleActive')
                        ->label('Toggle Active Status')
                        ->icon('heroicon-o-check-circle')
                        ->action(function (\Illuminate\Database\Eloquent\Collection $records): void {
                            foreach ($records as $record) {
                                $record->update([
                                    'is_active' => !$record->is_active,
                                ]);
                            }
                        })
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
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
            'index' => Pages\ListTours::route('/'),
            'create' => Pages\CreateTour::route('/create'),
            'edit' => Pages\EditTour::route('/{record}/edit'),
        ];
    }
}
