<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResource;
use App\Models\Brandsmodels;
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
        $brand=Brandsmodels::create($request->validated());

        return new BrandResource($brand);

        // dd($request);
    }
}
