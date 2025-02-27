<?php
namespace App\Filament\Resources\AirlineResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\AirlineResource;
use App\Filament\Resources\AirlineResource\Api\Requests\UpdateAirlineRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = AirlineResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Airline
     *
     * @param UpdateAirlineRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateAirlineRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}