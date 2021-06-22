<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResource;
use App\Models\Brandsmodels;


class BrandModelShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        // $brand = Brandsmodels::findOrFail($id);

        // return new BrandResource($brand);

        return Brandsmodels::find($id)->getBrand;

       
    }
}
