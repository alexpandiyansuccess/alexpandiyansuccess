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
  
       return new BrandResource(Brands::with('brandModels')->find($id));

    }
}
