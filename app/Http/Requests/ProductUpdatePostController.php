<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdatePostController extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
                'productname' => ['sometimes','required','max:10'],
                'description' => ['sometimes','required','max:50'],
                'amount' => ['sometimes','required','max:4'],
        
        ];
    }
}
