<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedalTableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'flag' => config('services.medal.img') . $this['n_NOCGeoID'] . '.svg',
            'name' => $this['c_NOC'],
            'short_name' => $this['c_NOCShort'],
            'gold' => $this['n_Gold'],
            'silver' => $this['n_Silver'],
            'bronze' => $this['n_Bronze'],
            'total' => $this['n_Total'],
        ];
    }
}
