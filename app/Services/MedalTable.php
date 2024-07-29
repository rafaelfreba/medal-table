<?php

namespace App\Services;

use App\Http\Resources\MedalTableCollection;
use Illuminate\Support\Facades\Http;

class MedalTable
{
    public function getMedals()
    {
        $response = Http::get(config('services.medal.url'));

        if($response->successful()){
            return (new MedalTableCollection(collect($response->json()['MedalTableNOC'])))->resolve();
        }

        return [];
    }
}
