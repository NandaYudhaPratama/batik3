<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
    $data_blog = \App\Models\Blog::all();
    return view('produk.index',['data_blog' => $data_blog]);
    }
}
