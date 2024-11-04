@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h5>ID: {{$post->id}}</h5>
        <h2>{{$post->name}}</h2>
        <p>{{$post->detail}}</p>
        <img src="/images/{{$post->image}}" width="300px">
    </div>
</div>

@endsection