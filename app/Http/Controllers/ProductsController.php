<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();
        $productsMatrix = [];
        $i = 0;
        $j = 0;
        foreach ($products as $p){
            $productsMatrix[$i][$j] = $p;
            $j++;
            if ($j == 3){
                $j = 0;
                $i++;
            }
        }

        return view('products.index', compact('categories', 'productsMatrix'));

    }

}
