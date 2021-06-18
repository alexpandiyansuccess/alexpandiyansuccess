<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;

use App\Http\Resources\ProductResource;

class ProductIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->route());
        // return response()->json(['me' => 'working']);

        $posts = Products::paginate(10);

        return ProductResource::collection($posts);
    }
}
