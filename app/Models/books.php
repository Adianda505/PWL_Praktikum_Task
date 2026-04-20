<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title',  
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id' 
    ];
    
    public function bookshelf(){
        return $this->belongsTo(bookshelf::class);
    }

    public function category(){
        return $this->belongsTo(bokshelf::class);
    }

    public function loanDetails(){
        return $this->hasMany(LoanDetail::class);
    }
}
