<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $table = 'merchant';
    protected $guarded = [];
    protected $primary_key = 'id';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
