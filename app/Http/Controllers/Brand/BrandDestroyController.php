<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;


class BrandDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $brand = Brands::findOrFail($id);

        if($brand->delete()){      
            return response()->json([
                "message" => "Brand has been deleted successfully!"
            ]);
        }
        
    }
}
