<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
</head>
<body>
    <h3>Student Entry Form</h3>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="email" placeholder="Enter your email address"><br>
        <input type="text" name="phone" placeholder="Enter your phone number"><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>