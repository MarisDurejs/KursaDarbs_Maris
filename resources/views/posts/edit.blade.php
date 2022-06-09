@extends('dashboard')

@section('content')
    @if ($errors->any())
<div class="alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/posts/edit/{{$post->id}}" method="post" class="mx-12 text-lg" >
    @csrf
        Title : <br><input type="text" name="title" value="{{ $post->title }}"><br><br>
        Body : <br><input type="text" name="body" value="{{ $post->body }}"><br><br>
        Author : <br><input type="text" name="author_name" value="{{ $post->author_name }}"><br><br>
    <input type="submit" class="hover:text-blue-600">
   
</form>

@endsection