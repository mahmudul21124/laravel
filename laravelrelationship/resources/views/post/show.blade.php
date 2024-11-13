<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
</head>
<body>

    <h2> ID: {{$post->id}} </h2>
    <h2> Post Title: {{$post->name}} </h2>
    <h4> Comments</h4>
    <ul>
        @foreach ($comments as $comment)
            <li>{{$comment->comment}}</li>
        
        @endforeach
    </ul>
</body>
</html>