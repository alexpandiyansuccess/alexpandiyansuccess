<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandModelResource;
use App\Models\BrandModels;
use App\Http\Requests\BrandModelRequest;

class BrandModelStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BrandModelRequest $request)
    {

        
        $brand=BrandModels::create($request->validated());

        return new BrandModelResource($brand);

        // dd($request);
    }
}
