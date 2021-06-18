<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Resources\ProductResource;


class ProductShowyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        // dd($id);
        $posts = Products::findOrFail($id);
        // dd($posts);
        return new ProductResource($posts);

        
    }
}
