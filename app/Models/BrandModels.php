<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModels extends Model
{
    use HasFactory;

    protected $fillable=[
       'brands_id',
       'model'
    ];

  public function brands() {
        return $this->belongsTo(Brands::class);
    }
}
