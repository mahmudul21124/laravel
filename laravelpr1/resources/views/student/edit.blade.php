<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit Form</title>
</head>
<body>
    <h3>Student Edit Form</h3>
    <form action="{{route('student.update', $student->id)}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$student->name}}" placeholder="Enter your name"><br>
        <input type="text" name="email" value="{{$student->email}}" placeholder="Enter your email address"><br>
        <input type="text" name="phone" value="{{$student->phone}}" placeholder="Enter your phone number"><br>
        <input type="submit" name="update" value="UPDATE">
    </form>
    
</body>
</html>