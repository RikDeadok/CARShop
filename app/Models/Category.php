<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable = [
        "parent_id", "name"
    ];

    public function childCat()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
