<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'index', 'birth_date', 'middle_name'];

    public function exams()
    {
        return $this->hasMany(StudentExam::class);
    }
}
