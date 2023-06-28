<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // Accessor
    public function getNameAttribute($value)
    {
        return ucFirst($value);
        // return 'Khan'.$value;
    }
    // Mutator
    public function setCityAttribute($value)
    {
        $this->attributes['city']=$value. 'India';
    }
}
