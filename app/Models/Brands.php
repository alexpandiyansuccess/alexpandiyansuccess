<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'cost'
    ];

    public function getBrandModels(){
        return $this->hasOne('App\models\Brandsmodels');
    }
}
