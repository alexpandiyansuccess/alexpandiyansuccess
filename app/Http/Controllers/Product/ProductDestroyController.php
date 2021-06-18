<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Models\Products;

use App\Http\Resources\ProductResource;


use App\Http\Requests\ProductStorePostController;

class ProductDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        // dd("ss");
        $post = Products::findOrFail($id);

        if($post->delete()){
       

            return response()->json([
            'message'=>"deleted successfully"
            ]);
        }
    }
}
