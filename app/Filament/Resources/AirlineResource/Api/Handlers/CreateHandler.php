<?php
namespace App\Filament\Resources\AirlineResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\AirlineResource;
use App\Filament\Resources\AirlineResource\Api\Requests\CreateAirlineRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = AirlineResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Airline
     *
     * @param CreateAirlineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateAirlineRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}