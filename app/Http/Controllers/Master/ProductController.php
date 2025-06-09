<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $apiConsumer = new ApiController();
        $products = $apiConsumer->getItemsProducts();
        $categories = $apiConsumer->getItemsCategories();

        // Membuat array dengan id kategori sebagai key
        $categoriesArray = collect($categories)->keyBy('id');

        // Menambahkan nama kategori pada produk
        foreach ($products as &$product) {
            $category = $categoriesArray->get($product['category_id']);
            $product['category_name'] = $category ? $category['name'] : 'Unknown'; // Jika tidak ada kategori, tampilkan 'Unknown'
        }
        unset($product); // Good practice to unset reference variable

        $data = [
            'products' => $products,
            'categories' => $categories,
        ];

        // dd($products);

        return view('master.produk.index', $data);
    }
}
