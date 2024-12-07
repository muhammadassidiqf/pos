<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $guarded = [];
    protected $primary_key = 'id';

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}