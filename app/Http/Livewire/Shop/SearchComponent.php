<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use Illuminate\Http\Request;

//use app\Models\Product;
use Illuminate\Support\Facades\DB;


class SearchComponent extends Component
{
    public $texto; 

    public function index(Request $request){

        $texto = trim($request->get('texto'));
        $product = DB::table('products')
            ->select("name","description")
            ->where("name","LIKE","%","$texto","%")
            ->orWhere("description","LIKE","%","$texto","%");
        return view('product.index', compact('products','texto'));
    }

    public function render()
    {
        $cart_items = \Cart::session(auth()->id())->getContent();
        return view('livewire.shop.search-component', compact('cart_items'));
    }
}
