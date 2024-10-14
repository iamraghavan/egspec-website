<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;


class CampusWeather extends Component
{
    public $weatherCondition;
    public $temperature;
    public $weatherIcon;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->fetchWeather();
    }

    /**
     * Fetch weather data from the Weather API.
     */
    protected function fetchWeather(): void
    {
        $apiKey = env('WEATHER_API_KEY'); // Use environment variable for API key for better security
        $location = 'Nagapattinam';
        $url = "https://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}&aqi=no";

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $this->processWeatherData($response->json());
            } else {
                $this->handleApiError($response->status());
            }
        } catch (\Exception $e) {
            $this->logError($e);
            $this->weatherCondition = 'Unknown';
            $this->temperature = 'N/A';
            $this->weatherIcon = 'wi wi-na';
        }
    }

    /**
     * Process the weather data from the API response.
     */
    protected function processWeatherData(array $data): void
    {
        $this->weatherCondition = $data['current']['condition']['text'] ?? 'Unknown';
        $this->temperature = $data['current']['temp_c'] ?? 'N/A';

        $isDaytime = $data['current']['is_day'] ?? 1; // Use 'is_day' to determine day/night
        $this->weatherIcon = $this->getWeatherIconClass($this->weatherCondition, (bool) $isDaytime);
    }

    /**
     * Handle errors returned by the API.
     */
    protected function handleApiError(int $statusCode): void
    {
        $this->weatherCondition = 'Unknown';
        $this->temperature = 'N/A';
        $this->weatherIcon = 'wi wi-na';

        // Log the error for further analysis
        Log::error("Weather API request failed with status code: {$statusCode}");
    }

    /**
     * Log exceptions for better debugging.
     */
    protected function logError(\Exception $e): void
    {
        Log::error('Weather API request failed: ' . $e->getMessage());
    }

    /**
     * Map the weather condition to a FontAwesome icon class.
     */
    /**
     * Map the weather condition to a FontAwesome icon class based on WeatherAPI codes.
     */
    protected function getWeatherIconClass(string $condition, bool $isDaytime): string
    {
        $condition = strtolower($condition);

        return match ($condition) {
            'sunny', 'clear' => $isDaytime ? 'wi wi-day-sunny' : 'wi wi-night-clear',
            'partly cloudy' => $isDaytime ? 'wi wi-day-cloudy' : 'wi wi-night-alt-partly-cloudy',
            'cloudy' => 'wi wi-cloudy',
            'overcast' => 'wi wi-cloud',
            'patchy rain nearby', 'patchy rain possible', 'light rain shower', 'light showers' => $isDaytime ? 'wi wi-day-showers' : 'wi wi-night-alt-showers',
            'light rain', 'patchy light rain' => $isDaytime ? 'wi wi-day-rain' : 'wi wi-night-alt-rain',
            'moderate rain', 'moderate rain at times' => $isDaytime ? 'wi wi-day-rain-mix' : 'wi wi-night-alt-rain-mix',
            'heavy rain', 'heavy rain at times', 'torrential rain shower' => $isDaytime ? 'wi wi-day-rain-wind' : 'wi wi-night-alt-rain-wind',
            'thunderstorm', 'thundery outbreaks possible', 'patchy light rain with thunder', 'moderate or heavy rain with thunder' => $isDaytime ? 'wi wi-day-thunderstorm' : 'wi wi-night-alt-thunderstorm',
            'mist', 'fog', 'freezing fog' => $isDaytime ? 'wi wi-day-fog' : 'wi wi-night-fog',
            'snow', 'light snow', 'patchy snow possible', 'moderate snow', 'patchy heavy snow' => $isDaytime ? 'wi wi-day-snow' : 'wi wi-night-alt-snow',
            'blowing snow', 'blizzard' => $isDaytime ? 'wi wi-day-snow-wind' : 'wi wi-night-alt-snow-wind',
            'ice pellets', 'light showers of ice pellets', 'moderate or heavy showers of ice pellets' => $isDaytime ? 'wi wi-day-hail' : 'wi wi-night-alt-hail',
            'sleet', 'light sleet', 'moderate or heavy sleet', 'light sleet showers' => $isDaytime ? 'wi wi-day-sleet' : 'wi wi-night-alt-sleet',
            'haze' => $isDaytime ? 'wi wi-day-haze' : 'wi wi-night-fog',
            'smoke' => 'wi wi-smoke',
            'dust' => 'wi wi-dust',
            'sandstorm' => 'wi wi-sandstorm',
            default => 'wi wi-na', // Default icon if no match is found
        };
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campus-weather');
    }
}
