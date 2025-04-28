<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    private $apiBaseUrl;

    public function __construct()
    {
        // Menggunakan konfigurasi dari file config/services.php
        $this->apiBaseUrl = config('services.api.base_url', 'https://lssoft88.xyz/api');
    }

    public function getItemsProducts()
    {
        try {
            return Cache::remember('products', now()->addMinutes(10), function () {
                $response = Http::get("{$this->apiBaseUrl}/products");

                if ($response->successful()) {
                    return $response->json();
                }

                return ['error' => 'Failed to fetch data', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }

    public function getItemsCategories()
    {
        try {
            return Cache::remember('categories', now()->addMinutes(10), function () {
                $response = Http::get("{$this->apiBaseUrl}/categories");

                if ($response->successful()) {
                    return $response->json();
                }

                return ['error' => 'Failed to fetch data', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }
}
