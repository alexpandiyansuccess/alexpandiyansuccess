<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;

use App\Models\Brands;
use App\Models\Brandsmodels;

use function GuzzleHttp\Promise\is_rejected;

class BrandShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
       $brand = Brands::with('brandModels')->find($id);
       if($brand) {
         return new BrandResource($brand);
       }
        
       return response()->json(['msg' => 'Brand not available']); 
    }
}
