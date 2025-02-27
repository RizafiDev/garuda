<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlightResource\Pages;
use App\Models\Flight;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;

class FlightResource extends Resource
{
    protected static ?string $model = Flight::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-americas';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('flight_number')->required(),
            Forms\Components\Select::make('airline_id')
                ->relationship('airline', 'name')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('flight_number')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('airline.name')->sortable(),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFlights::route('/'),
            'create' => Pages\CreateFlight::route('/create'),
            'edit' => Pages\EditFlight::route('/{record}/edit'),
        ];
    }
}
