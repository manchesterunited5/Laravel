<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $pro = Product::orderBy('id', 'DESC')->limit(6)->get();
        $sale_price = Product::orderby('id', 'DESC')->where('sale_price', '>', 0)->limit(6)->get();
        return view('customer.home', compact('pro', 'sale_price'));
    }

    public function detailPage($id)
    {
        $pro = Product::find($id);
        return view('customer.detail', compact('pro'));
    }

    public function shopPage(){
        $pros = Product::filter()->search()->orderBy('id', 'DESC')->paginate(6);
        return view('customer.shop', compact('pros'));
    }
}
