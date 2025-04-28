<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

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

        $data = [
            'products' => $products,
            'categories' => $categories,
        ];

        return view('master.produk.index', $data);
    }

}
