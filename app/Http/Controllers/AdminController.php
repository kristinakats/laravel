<?php 
namespace App\Http\Controllers;
use DB;
use App\Product;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{
    
    public function index()
    {
         $products = Product::all();
       return view('admin.no',['products' => $products]);
       
    }
     public function newProduct(){
        return view('admin.new');
    }
   
    public function add()
    {
        $product = new product;

        $product->id = Request::input('id');
        $product->name = Request::input('name');
        $product->description = Request::input('description');
        $product->price = Request::input('price');
        $product->imageurl = Request::input('imageurl');
       

        $product->save();

        return redirect('/admin/no');
        
    }

    
    public function store(Request $request)
    {
        
        
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
    
        $product = Product::find($id);
        return view('admin.edit', compact('product'));      
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if(is_null($product)){
        return 'problem';
        }
        
        $product->id = Request::input('id');
        $product->name = Request::input('name');
        $product->description = Request::input('description');
        $product->price = Request::input('price');
        $product->imageurl = Request::input('imageurl');
       

        $product->save();
        return redirect('/admin/nο');

    }
    public function changeOrder(){
        $orders=Order::all();
        return view('admin.change',['orders' => $orders]);
    }
         
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/no');
    }
}
