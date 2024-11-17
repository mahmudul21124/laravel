@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Attendance Report for Classroom: {{ $classroom->name }} on {{ $date }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student->name }}</td>
                <td>{{ ucfirst($attendance->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
