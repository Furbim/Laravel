<?php

namespace App\Http\Controllers;

use Illuminate\Http\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Request\ProductRequest;

class ProductController extends Controller
{

    public function store(ProductRequest $request)
    {   
        try {
            Product::create([
                "name" => $request->name,
                "price" => $request->price,
                "stock" => $request->stock,
            ]);

            return redirect()->route('product.create')->with('success', "Usuário cadastrado com sucesso!");

        } catch (\Exception $e) {

            return back()->withInput()->with('error', "Erro ao cadastrar o usuário!");
        }
    }
    
    public function buy()
    {   
        
    }

}
