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
        $data['products'] = $apiConsumer->getItemsProducts();

        return view('master.produk.index', $data);
    }
}
