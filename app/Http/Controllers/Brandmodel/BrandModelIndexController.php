<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResource;
use App\Http\Resources\BrandModelResource;

use App\Models\BrandModels;
use App\Models\Brands;




class BrandModelIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return BrandModelResource::collection(BrandModels::with('brands')->paginate(10));
    }
}
