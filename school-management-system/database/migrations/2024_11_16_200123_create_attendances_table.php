<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');  // Foreign key column (unsigned big integer)
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('classroom_id');  // Foreign key column (unsigned big integer)
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->date('attendance_date'); // Date of the attendance
            $table->enum('status', ['present', 'absent', 'late', 'excused']); // Attendance status
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
