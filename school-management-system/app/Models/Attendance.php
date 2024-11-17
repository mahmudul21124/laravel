<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

     // Allow these fields to be mass assignable
     protected $fillable = ['student_id', 'classroom_id', 'attendance_date', 'status'];

     /**
      * Define the relationship with the Student model.
      */
     public function student()
     {
         return $this->belongsTo(Student::class);
     }
 
     /**
      * Define the relationship with the Classroom model.
      */
     public function classroom()
     {
         return $this->belongsTo(Classroom::class);
     }
}
