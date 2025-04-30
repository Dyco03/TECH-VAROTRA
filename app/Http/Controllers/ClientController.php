<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Client;
use App\Cart;
use Session;


class ClientController extends Controller
{
    //

    public function home(){
        $sliders = Slider::where('status', 1)->get();
        $produits = Product::where('status',1)->get();
        return view('client.home')
                ->with('sliders',$sliders)
                ->with('produits',$produits);
    }   

    public function shop(){
        $categories = Category::get();
        $produits = Product::where('status',1)->get();
        return view('client.shop')
            ->with('categories',$categories)
            ->with('produits',$produits);
    }

    public function select_par_cat($name){
        $categories = Category::get();
        $produits = Product::where('product_category',$name)
                           ->where('status',1)->get();
        
        return view('client.shop')->with('produits',$produits)
                                  ->with('categories',$categories);
    }

    public function ajouter_au_panier($id){
        $produit = Product::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($produit,$id);
        Session::put('cart',$cart);

        //dd(Session::get('cart'));
        return redirect('/shop');
    }

    public function panier(){
        if(!Session::has('cart')){
            return view('client.cart');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('client.cart')->with('products',$cart->items);
    }

    public function modifier_panier(Request $request,$id){
        //print('the product id is '.$request->id.' And the product qty is '.$request->quantity);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect('panier');
    }

    public function retirer_produit($id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
       
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return redirect('/panier');
    }

    public function creer_compte(Request $request){
        $this->validate($request,['email' => 'email|required',
                                    'password' => 'required|min:4']);
    
        $client = new Client();
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));

        $client->save();

        return back()->with('status','Votre compte a été créé avec succès');
    }

    public function client_login(){
        return view('client.login');
    }

    public function signup(){
        return view('client.signup');
    }

    public function paiement(){
        return view('client.checkout');
    }
}
