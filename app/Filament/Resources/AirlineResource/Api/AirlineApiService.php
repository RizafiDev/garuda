<?php
namespace App\Filament\Resources\AirlineResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\AirlineResource;
use Illuminate\Routing\Router;


class AirlineApiService extends ApiService
{
    protected static string | null $resource = AirlineResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
