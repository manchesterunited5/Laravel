<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham = Category::all();
        return view('admin.product.create', compact('sanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->image->getClientOriginalName();
        $request->image->move(public_path('./uploads.product'), $file_name);

        Product::create([
            'name' => $request->name,
            'image' => $file_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham = Category::all();
        $pro = Product::find($id);
        return view('admin.product.edit', compact('sanpham', 'pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file_name = $request->image->getClientOriginalName();
        $request->image->move(public_path('./uploads.product'), $file_name);

        Product::find($id)->update([
            'name' => $request->name,
            'image' => $file_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::find($id)->delete();
            return redirect(route('product.index'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
