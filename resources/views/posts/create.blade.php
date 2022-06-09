@extends('dashboard')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/posts/create" method="post">
    @csrf
    <div class="mx-12">
        Title:<br><input type="text" name="title" value="{{ old('title') }}"><br>
        Body:<br><input type="text" name="body" value="{{ old('body') }}"><br>
        Author:<br><input type="text" name="author_name" value="{{ old('author_name') }}"><br><br>
    </div>
    <div class="mx-12 text-lg hover:text-blue-600">
        <input type="submit">
    </div><br>
</form>

@endsection