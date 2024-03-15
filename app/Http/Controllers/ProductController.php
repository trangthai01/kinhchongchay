<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $PER_PAGE = 6;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $productCategories = ProductCategory::where('use_yn',true)->get();
        $products = Product::where('use_yn',true)->get();
        return view('layouts.pages.products',
        [
            'productCategories' => $productCategories,
            'products' => $products
        ]);
    }

    public function catalogue()
    {
        return view('layouts.pages.products.catalogue');
    }

}
