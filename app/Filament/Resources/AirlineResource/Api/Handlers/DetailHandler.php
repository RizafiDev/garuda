<?php

namespace App\Filament\Resources\AirlineResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\AirlineResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\AirlineResource\Api\Transformers\AirlineTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = AirlineResource::class;


    /**
     * Show Airline
     *
     * @param Request $request
     * @return AirlineTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new AirlineTransformer($query);
    }
}
