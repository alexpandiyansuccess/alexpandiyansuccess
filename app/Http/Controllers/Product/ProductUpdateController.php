<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpdatePostController;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Http\Resources\ProductResource;

class ProductUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ProductUpdatePostController $request, $id)
    {
        $admin = Products::findOrFail($id);
        $admin->update($request->validated());

        return new ProductResource($admin);
    }
}
