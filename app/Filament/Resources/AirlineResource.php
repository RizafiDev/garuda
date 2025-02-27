<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirlineResource\Pages;
use App\Models\Airline;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Actions\Action;

class AirlineResource extends Resource
{
    protected static ?string $model = Airline::class;
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('code')->required(),
            Forms\Components\FileUpload::make('logo')->image(),

        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('code')->sortable(),
            Tables\Columns\ImageColumn::make('logo')->width(200)->height(100),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);;
        
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAirlines::route('/'),
            'create' => Pages\CreateAirline::route('/create'),
            'edit' => Pages\EditAirline::route('/{record}/edit'),
        ];
    }
}
