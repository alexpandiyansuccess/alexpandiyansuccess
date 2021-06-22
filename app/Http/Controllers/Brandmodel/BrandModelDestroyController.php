<?php

namespace App\Http\Controllers\Brandmodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brandsmodels;


class BrandModelDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $branmodel = Brandsmodels::findOrFail($id);

        if($branmodel->delete()){
            return response()->json([
                'message'=>"Brand Model has been deleted successfully"
                ]);
        }
    }
}
