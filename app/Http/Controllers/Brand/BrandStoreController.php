<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BrandRequest $request)
    {
        $brand = new Brands;
        $brand->fill($request->validated());
        $brand->save();        
        return new BrandResource($brand);
    }
}
