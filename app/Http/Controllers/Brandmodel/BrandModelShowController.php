<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandModelResource;
use App\Models\BrandModels;


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
        // return BrandModels::find($id)->getBrand;

        $brandModel = BrandModels::with('brands')->find($id);
        if($brandModel) {
          return new BrandModelResource($brandModel);
        }
         
        return response()->json(['message' => 'Brand Model id not available']); 

       
    }
}
