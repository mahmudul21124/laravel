<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Display the attendance form for a specific classroom and date
    public function create($classroom_id, $date)
    {
        $classroom = Classroom::findOrFail($classroom_id);
        $students = Student::where('classroom_id', $classroom_id)->get();

        return view('attendance.create', compact('students', 'classroom', 'date'));
    }

    // Store attendance
    public function store(Request $request)
    {
        foreach ($request->attendance as $student_id => $status) {
            Attendance::create([
                'student_id' => $student_id,
                'classroom_id' => $request->classroom_id,
                'attendance_date' => $request->attendance_date,
                'status' => $status
            ]);
        }

        return redirect()->route('attendance.create', [
            'classroom_id' => $request->classroom_id,
            'date' => $request->attendance_date
        ])->with('success', 'Attendance recorded successfully');
    }

    public function showAttendance($classroom_id, $date)
    {
        $attendances = Attendance::where('classroom_id', $classroom_id)
            ->where('attendance_date', $date)
            ->with('student')
            ->get();

        return view('attendance.report', compact('attendances'));
    }
}
