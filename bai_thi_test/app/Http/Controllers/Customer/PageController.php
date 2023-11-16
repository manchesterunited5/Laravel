<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $pros = Product::orderBy('id', 'DESC')->limit(6)->get();
        $sale_price = Product::orderBy('id', 'DESC')->Where('sale_price', '>', 0)->limit(6)->get();
        return view('customer.home', compact('pros', 'sale_price'));
    }

    public function detailPage($id)
    {
        $detail = Product::find($id);
        return view('customer.detail', compact('detail'));
    }

    public function shopPage()
    {
        $allProducts = Product::search()->filter()->orderBy('id', 'DESC')->paginate(3);
        return view('customer.shop', compact('allProducts'));
    }

}
