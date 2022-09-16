<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        $product = new Products;
        $product->nama = $request->get('namaproduk');
        $product->deskripsi = $request->get('deskripsiproduk');
        $product->gambar = $image_name;
        $product->save();

        

        return 'Produk berhasil ditambahkan';
       
    }
}