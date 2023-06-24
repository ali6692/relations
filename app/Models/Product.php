<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title'];
    public function photos()
    {
        return $this->morphMany(related:'App\Models\Photo',name:'imageable');
    }
}
