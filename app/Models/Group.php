<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Group extends Model
{
    use HasFactory;

    protected $primaryKey="group_id";

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
   
}