<?php

namespace App\Modules\Movie\Services;

use Illuminate\Support\Facades\Http;

class Movie implements MovieInterface
{
    const API_KEYWORD = 'api_key';
    //Should be hidden in .env
    const API_KEY = '5bf88ee87375c3aef1dec6dbac97265d';
    const BASE_URI = 'https://api.themoviedb.org/3/';
    const POPULAR = 'movie/popular';
    const LATEST = 'movie/latest';

    public function getPopular(): array
    {
        $response = Http::get(Movie::BASE_URI . Movie::POPULAR, [
            Movie::API_KEYWORD => Movie::API_KEY,
        ]);

        return json_decode($response->body())->results;
    }

    public function getLatest(): array
    {
        $response = Http::get(Movie::BASE_URI . Movie::LATEST, [
            Movie::API_KEYWORD => Movie::API_KEY,
        ]);

        return json_decode($response->body(), true);
    }

}
