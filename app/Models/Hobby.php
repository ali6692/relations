<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
    protected $table="hobbies";
    protected $guarded = [];
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
