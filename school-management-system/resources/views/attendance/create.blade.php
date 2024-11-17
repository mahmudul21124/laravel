@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mark Attendance for Classroom: {{ $classroom->name }} on {{ $date }}</h1>

    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <input type="hidden" name="classroom_id" value="{{ $classroom->id }}">
        <input type="hidden" name="attendance_date" value="{{ $date }}">

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>
                        <select name="attendance[{{ $student->id }}]" class="form-control">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                            <option value="late">Late</option>
                            <option value="excused">Excused</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Save Attendance</button>
    </form>
</div>
@endsection
