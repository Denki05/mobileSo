<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    private $apiBaseUrl;
    private $apiKey;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.api.base_url');
        $this->apiKey = config('services.api.key');
    }
    
    private function withApiKey()
    {
        return Http::withHeaders([
            'X-API-KEY' => $this->apiKey,
        ]);
    }

    public function getItemsProducts()
    {
        try {
            return Cache::remember('products', now()->addMinutes(15), function () {
                $response = $this->withApiKey()->get("{$this->apiBaseUrl}/products");

                if ($response->successful()) {
                    return $response->json();
                }

                return ['error' => 'Failed to fetch products', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }

    public function getItemsBrands()
    {
        try {
            return Cache::remember('brands', now()->addMinutes(15), function () {
                $response = $this->withApiKey()->get("{$this->apiBaseUrl}/brands");

                if ($response->successful()) {
                    return $response->json();
                }

                return ['error' => 'Failed to fetch brands', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }

    public function getProductsByBrand($brand)
    {
        try {
            if (!$brand) {
                return response()->json(['error' => 'Brand parameter is required'], 400);
            }

            return Cache::remember("products_by_brand_{$brand}", now()->addMinutes(15), function () use ($brand) {
                $response = $this->withApiKey()->get("{$this->apiBaseUrl}/products");

                if ($response->successful()) {
                    $products = collect($response->json());

                    return $products->filter(function ($product) use ($brand) {
                        return isset($product['brand_name']) && strtolower($product['brand_name']) === strtolower($brand);
                    })->values();
                }

                return ['error' => 'Failed to fetch products', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }

    public function getItemsCategories()
    {
        try {
            return Cache::remember('categories', now()->addMinutes(15), function () {
                $response = $this->withApiKey()->get("{$this->apiBaseUrl}/categories");

                if ($response->successful()) {
                    return $response->json();
                }

                return ['error' => 'Failed to fetch categories', 'details' => $response->body()];
            });
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Service unavailable'], 503);
        }
    }
}
