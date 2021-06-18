<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ProductStorePostController;

use App\Models\Products;

use App\Http\Resources\ProductResource;



class ProductStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ProductStorePostController $request)
    {

        
        Products::create($request->validated());

        $posts = Products::paginate(10);

        return ProductResource::collection($posts);

            return response()->json([
            'message' => 'created successfully !.'
            ]);
    }
}
