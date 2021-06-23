<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\BrandResource;
use App\Models\Brands;
use App\Http\Requests\BrandRequest;


class BrandUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BrandRequest $request,$id)
    {
       $brand = Brands::findOrFail($id);
       $brand->update($request->validated());

       return new BrandResource($brand);

    }
}
