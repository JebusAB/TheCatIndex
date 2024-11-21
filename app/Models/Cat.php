<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    use HasFactory;
    //protected $table = 'cats';
}
