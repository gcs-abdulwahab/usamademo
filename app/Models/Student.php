<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    // Student belongs to Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }


}
