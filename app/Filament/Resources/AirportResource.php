<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirportResource\Pages;
use App\Models\Airport;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;

class AirportResource extends Resource
{
    protected static ?string $model = Airport::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('iata_code')->required(),
            Forms\Components\TextInput::make('city')->required(),
            Forms\Components\TextInput::make('country')->required(),
            Forms\Components\FileUpload::make('image')->image(),

        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('iata_code')->sortable(),
            Tables\Columns\TextColumn::make('city')->sortable(),
            Tables\Columns\TextColumn::make('country')->sortable(),
            Tables\Columns\ImageColumn::make('image')->width(200)->height(100),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAirports::route('/'),
            'create' => Pages\CreateAirport::route('/create'),
            'edit' => Pages\EditAirport::route('/{record}/edit'),
        ];
    }
}
