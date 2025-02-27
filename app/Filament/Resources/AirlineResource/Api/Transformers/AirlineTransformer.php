<?php
namespace App\Filament\Resources\AirlineResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Airline;

/**
 * @property Airline $resource
 */
class AirlineTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
