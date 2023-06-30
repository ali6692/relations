<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->morphedByMany(\App\Models\Student::class,'courseable');
    }
    public function teachers()
    {
        return $this->morphedByMany(\App\Models\Teacher::class,'courseable');
    }

}
