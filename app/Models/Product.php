<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product';
    protected $guarded = [];
    protected $primary_key = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
