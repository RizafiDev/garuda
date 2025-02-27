<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromoCodeResource\Pages;
use App\Models\PromoCode;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;

class PromoCodeResource extends Resource
{
    protected static ?string $model = PromoCode::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('code')->required(),
            Forms\Components\Select::make('discount_type')
                ->options(['percentage' => 'Percentage', 'fixed' => 'Fixed'])
                ->required(),
            Forms\Components\TextInput::make('discount')->numeric()->required(),
            Forms\Components\DateTimePicker::make('valid_until')->required(),
            Forms\Components\Toggle::make('is_used'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('code')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('discount_type')->sortable(),
            Tables\Columns\TextColumn::make('discount')->sortable(),
            Tables\Columns\TextColumn::make('valid_until')->dateTime(),
            Tables\Columns\BooleanColumn::make('is_used'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromoCodes::route('/'),
            'create' => Pages\CreatePromoCode::route('/create'),
            'edit' => Pages\EditPromoCode::route('/{record}/edit'),
        ];
    }
}
