<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookshelfs extends Model
{
    protected $fillable = [
        'code',
        'name',
    ] ;

    public function books(){
        return $this->hasMany(books::class);
    }
}
