@extends ('layout')

@section('content')

@if (session('msg'))
<div class="alert alert-success"> <b> {{ session('msg') }} </b> </div>
@endif

<div class="row">
    <div class="col-lg-12">
        <h1>Post List</h1>
        <a href="{{route('posts.create')}}" class="btn btn-success float-right">New Post</a>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- @php
            $sn = 1
            @endphp -->
            <tbody>

                @foreach ($posts as $post)

                <tr>

                    <td scope="row">{{$sn++}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->detail}}</td>
                    <td><img src="/images/{{$post->image}}" width="100"></td>
                    <td>Edit | 
                        
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                     
                
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection