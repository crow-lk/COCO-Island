<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LimitedTimeOfferResource\Pages;
use App\Filament\Resources\Traits\HandlesImages;
use App\Models\LimitedTimeOffer;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LimitedTimeOfferResource extends Resource
{
    use HandlesImages;

    protected static ?string $model = LimitedTimeOffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Limited Time Offers';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Section')
                            ->schema([
                                Forms\Components\TextInput::make('section_label')
                                    ->label('Section Label')
                                    ->placeholder('Limited Time Offer')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('section_icon')
                                    ->label('Section Icon Class')
                                    ->helperText('Font Awesome class, e.g. fas fa-fire')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('section_title')
                                    ->label('Section Title')
                                    ->placeholder('Exclusive Sri Lanka Experience')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('floating_badge_text')
                                    ->label('Floating Badge Text')
                                    ->placeholder('HOT DEAL')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('floating_badge_icon')
                                    ->label('Floating Badge Icon/Emoji')
                                    ->placeholder('🔥')
                                    ->maxLength(50),
                                self::imageUpload('hero_image', 'Hero Image', 'limited-time-offers')
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Offer Details')
                            ->schema([
                                Forms\Components\TextInput::make('offer_title')
                                    ->label('Offer Title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('offer_duration')
                                    ->label('Offer Duration')
                                    ->placeholder('12 Days & 11 Nights Tour in Sri Lanka')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('offer_highlight')
                                    ->label('Offer Highlight')
                                    ->placeholder('Signature Sri Lanka Experience')
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('offer_summary')
                                    ->label('Offer Summary')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'bulletList',
                                        'orderedList',
                                    ])
                                    ->columnSpanFull(),
                                Forms\Components\Repeater::make('highlights')
                                    ->label('Highlights')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-plane-arrival')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('text')
                                            ->label('Highlight Text')
                                            ->required()
                                            ->maxLength(255),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->columnSpanFull()
                                    ->minItems(0),
                            ]),
                        Forms\Components\Tabs\Tab::make('Pricing & Urgency')
                            ->schema([
                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('regular_price')
                                            ->numeric()
                                            ->label('Regular Price'),
                                        Forms\Components\TextInput::make('special_price')
                                            ->numeric()
                                            ->label('Special Price'),
                                        Forms\Components\TextInput::make('currency')
                                            ->maxLength(3)
                                            ->default('USD')
                                            ->label('Currency'),
                                    ]),
                                Forms\Components\TextInput::make('price_note')
                                    ->label('Price Note')
                                    ->placeholder('Per Person')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('savings_text')
                                    ->label('Savings Text')
                                    ->placeholder('Save $700 (28% OFF)')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('countdown_label')
                                    ->label('Countdown Label')
                                    ->placeholder('⏰ Offer Ends In:')
                                    ->maxLength(255),
                                Forms\Components\DateTimePicker::make('countdown_ends_at')
                                    ->label('Countdown Ends At')
                                    ->seconds(false),
                                Forms\Components\Toggle::make('countdown_enabled')
                                    ->label('Enable Countdown')
                                    ->default(true),
                            ]),
                        Forms\Components\Tabs\Tab::make('CTAs & Trust')
                            ->schema([
                                Forms\Components\Section::make('Primary Call to Action')
                                    ->schema([
                                        Forms\Components\TextInput::make('primary_cta_label')
                                            ->label('Button Label')
                                            ->placeholder('Book This Exclusive Offer')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('primary_cta_url')
                                            ->label('Button URL')
                                            ->placeholder('https://wa.me/94776605054')
                                            ->maxLength(255)
                                            ->nullable()
                                            ->rule(static::urlRule()),
                                        Forms\Components\TextInput::make('primary_cta_icon')
                                            ->label('Button Icon Class')
                                            ->placeholder('fab fa-whatsapp')
                                            ->maxLength(255),
                                    ])
                                    ->columns(3),
                                Forms\Components\Repeater::make('secondary_ctas')
                                    ->label('Secondary Actions')
                                    ->schema([
                                        Forms\Components\TextInput::make('label')
                                            ->label('Label')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('url')
                                            ->label('URL')
                                            ->maxLength(255)
                                            ->nullable()
                                            ->rule(static::urlRule()),
                                        Forms\Components\TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-info-circle')
                                            ->maxLength(255),
                                    ])
                                    ->columns(3)
                                    ->collapsible()
                                    ->columnSpanFull(),
                                Forms\Components\Repeater::make('trust_indicators')
                                    ->label('Trust Indicators')
                                    ->schema([
                                        Forms\Components\TextInput::make('icon')
                                            ->label('Icon Class')
                                            ->placeholder('fas fa-shield-alt')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('text')
                                            ->label('Text')
                                            ->required()
                                            ->maxLength(255),
                                    ])
                                    ->columns(2)
                                    ->collapsible()
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('bottom_note')
                                    ->label('Availability Note')
                                    ->rows(2)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('bottom_badge_text')
                                    ->label('Availability Badge Text')
                                    ->placeholder('Limited time offer - Book now to secure your spot!')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('bottom_badge_icon')
                                    ->label('Availability Badge Icon')
                                    ->placeholder('fas fa-clock')
                                    ->maxLength(255),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true),
                                Forms\Components\TextInput::make('display_order')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('hero_image')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('offer_title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('section_label')
                    ->label('Section Label')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('countdown_ends_at')
                    ->label('Ends At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('display_order')
                    ->sortable(),
            ])
            ->defaultSort('display_order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    protected static function urlRule(): Closure
    {
        return function (): Closure {
            return function (string $attribute, $value, Closure $fail): void {
                if (blank($value)) {
                    return;
                }

                $normalized = trim($value);

                if ($normalized === '#' ||
                    str_starts_with($normalized, '/') ||
                    str_starts_with($normalized, 'mailto:') ||
                    str_starts_with($normalized, 'tel:')
                ) {
                    return;
                }

                if (! filter_var($normalized, FILTER_VALIDATE_URL)) {
                    $fail('The ' . str_replace('_', ' ', $attribute) . ' must be a valid URL, route path, tel:, mailto:, or "#".');
                }
            };
        };
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLimitedTimeOffers::route('/'),
            'create' => Pages\CreateLimitedTimeOffer::route('/create'),
            'edit' => Pages\EditLimitedTimeOffer::route('/{record}/edit'),
        ];
    }
}
