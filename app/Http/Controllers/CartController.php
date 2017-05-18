<?php
 
namespace App\Http\Controllers;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class CartController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function addProduct ($productId,$productPrice){
 
         $cart = Cart::where('user_id',Auth::user()->id)->first();
        
        
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }  

       $cartItem= CartItem::where('cart_id',$cart->id)->where('product_id',$productId)->first();
       
        if(!$cartItem){
            $cartItem  = new Cartitem();
            $cartItem->product_id=$productId;
            $cartItem->cart_id= $cart->id;
            $cartItem->product_price=$productPrice;
            $cartItem->quantity=1;
            $cartItem->save();
        }
        elseif($cartItem){ 
               $cartItem->quantity=$cartItem->quantity+1;
               $cartItem->update();   
        }
        return redirect('/cart'); 
        
    }

    public function decreaseItem ($productId,$productPrice){
       $cart = Cart::where('user_id',Auth::user()->id)->first();
       $cartItem= CartItem::where('cart_id',$cart->id)->where('product_id',$productId)->first();
       if($cartItem->quantity>1){
          $cartItem->quantity=$cartItem->quantity-1;
          $cartItem->update(); 
       
       }
       elseif($cartItem->quantity=1){
        return redirect('/cart');
       }
       return redirect('/cart');
    }

    public function increaseItem ($productId,$productPrice){
       $cart = Cart::where('user_id',Auth::user()->id)->first();
       $cartItem= CartItem::where('cart_id',$cart->id)->where('product_id',$productId)->first();
       if($cartItem->quantity<5){
          $cartItem->quantity=$cartItem->quantity+1;
          $cartItem->update(); 
       
       }
       elseif($cartItem->quantity=5){
        return redirect('/cart');
       }
       return redirect('/cart');
    }
 

    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            
            $total+=$item->product->price*$item->quantity;
        }
 
        return view('view',['items'=>$items,'total'=>$total]);
    }
 
    public function deleteItem($id){
 
        CartItem::destroy($id);
        return redirect('/cart');
    }
 
}