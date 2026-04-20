<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'category',
    ];

    public function books(){
        return $this->hasMany(books::class);
    }
}
