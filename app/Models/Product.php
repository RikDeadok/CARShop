<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        "article", "name", "description", "price"
    ];

    protected $appends = [
        "first_photo"
    ];

    public function photos()
    {
        return $this->hasMany(ProductPhotos::class);
    }

    public function getFirstPhotoAttribute()
    {
        return $this->photos()->select('photo')->first();
    }
}
