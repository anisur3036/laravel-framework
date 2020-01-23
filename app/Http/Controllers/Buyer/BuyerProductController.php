<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyerProductController extends ApiController
{
    public function index(Buyer $buyer)
    {
        // DB::enableQueryLog();

        $products = $buyer->transactions()->with('product')
        ->get()->pluck('product');

        // dd(DB::getQueryLog());

        return $this->showAll($products);
    }
}
