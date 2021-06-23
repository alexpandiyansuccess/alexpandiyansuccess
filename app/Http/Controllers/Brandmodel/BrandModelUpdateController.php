<?php

namespace App\Http\Controllers\Brandmodel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BrandModels;

use App\Http\Requests\BrandModelRequest;

use App\Http\Resources\BrandModelResource;


class BrandModelUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BrandModelRequest $request,$id)
    {
        $brand = BrandModels::findOrFail($id);
        $brand->update($request->validated());
 
        return new BrandModelResource($brand);
    }
}
