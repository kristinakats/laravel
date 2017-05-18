<?php
 
namespace App\Http\Controllers;
use DB;
use Mail;
use App\User; 
use App\OrderItem;
use Illuminate\Http\Request;// bad
//use Illuminate\Support\Facades\Request;//swsto
use App\Http\Requests;
use App\Http\Requests\AddBlogPostRequest;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\CartItem;
class OrderController extends Controller
{
 
	public function __construct()
	{
		$this->middleware('auth');
	}
 
   public function checkout(){
	 $cart = Cart::where('user_id',Auth::user()->id)->first();
     $cartItem = CartItem::where('cart_id',$cart->id)->first();
      if($cartItem){
      	return view ('/checkout');
      }
     	
	  elseif(!$cartItem){
		     return redirect ('/cart');
	  }
	}
  
   
	public function add(AddBlogPostRequest $request)
	{
		$cart = Cart::where('user_id',Auth::user()->id)->first();
		$items = $cart->cartItems;
		
		   $total=0;
		   foreach($items as $item){
			   $total+=$item->product->price*$item->quantity;
		    }    

		    $order = new order();
		    $order->total_paid= $total;
		    $order->user_id=Auth::user()->id;
		    $order->save();
		    $order->first_name = $request->input('first_name');
		    $order->last_name = $request->input('last_name');
		    $order->city = $request->input('city');
		    $order->address = $request->input('address');
		    $order->postcode = $request->input('postcode');
		    $order->telephone_number = $request->input('telephone_number');
		    $order->card_number = $request->input('card_number');
		    $order->save();
		 
		    foreach($items as $item){
				    $orderItem = new OrderItem();
				    $orderItem->order_id=$order->id;
				    $orderItem->product_id=$item->product->id;
				    $orderItem->order_price=$item->product->price;
				    $orderItem->quantity=$item->quantity;
				
				    $orderItem->save();

			        CartItem::destroy($item->id);   
		            } 
		          
		         return redirect('list');
    }
		
    
	public function index(){
		$orders= Order::where('user_id',Auth::user()->id)->orderBy('id')->get();
		return view('list',['orders'=>$orders]);

	}
 
	 
}