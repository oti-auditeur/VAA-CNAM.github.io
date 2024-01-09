<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Http;

class WeatherWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $cityId = 4034636; // Remplacez par l'ID de la ville que vous souhaitez

        $response = Http::get("https://openweathermap.org/city/", [
            'id' => $cityId,
            'appid' => env('OPEN_WEATHER_MAP_KEY'), // Remplacez 'VOTRE_CLE_API' par votre clé API OpenWeatherMap
            'units' => 'metric', // Vous pouvez ajuster l'unité de mesure si nécessaire
        ]);

        $weatherData = $response->json();

        return view('widgets.weather_widget', [
            'config' => $this->config,
            'weatherData' => $weatherData,
        ]);
    }
}
