<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;

use App\Models\Brands;

// use App\Http\Modal

class BrandIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $brand = Brands::paginate(10);

        return BrandResource::collection($brand);
    }
}