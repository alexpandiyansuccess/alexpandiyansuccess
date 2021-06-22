<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandsmodels extends Model
{
    use HasFactory;

    protected $fillable=[
       'brands_id',
       'model'
    ];

    public function getBrand(){
        return $this->hasOne('App\models\Brands');
    }
}
