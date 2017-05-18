<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $keyword = \Request::get('keyword');
       $products = DB::table('products')->where('name',$keyword)->get();
       return view('product', ['products'=> $products]);
     }

      
     public function all()
     {
        $products = Product::all();
        return view('allproducts',['products' => $products]);
        return $products;

     }
     public function neck()
     {
        
        $products = DB::table('products')->where('description', 'necklace')->get();
        return view('necklace', ['products' => $products]);
    
     }
     public function ri()
     {
        $products = DB::table('products')->where('description', 'ring')->get();

        return view('ring', ['products' => $products]);
     }
   
      public function ear()
      {
        $products = DB::table('products')->where('description', 'earrings')->get();

        return view('earring', ['products' => $products]);
      }

   
}
