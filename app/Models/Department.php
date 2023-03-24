<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


// Department has many Students
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
