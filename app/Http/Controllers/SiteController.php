<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate();
        
        return view('site.home', compact('products'));
        
        // return view('site.empresa', [
        //     'nome' => $nome,
        //     'idade' => $idade,
        //     'html' => $html
        // ]);
    }
}
