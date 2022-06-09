@extends('dashboard')

@section('content')
<div class="mx-12">
    <a href="{{ route('posts.create') }}">
        <div class="text-slate-500 hover:text-blue-600 text-xl">Create<br></div>
    </a><br>
</div>

<div class="mx-12">
<table class="py-12 border-separate border border-slate-400">
    <thead class="text-slate-500 hover:text-blue-600 text-xl">
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Author name</th>
        <th>Actions</th>
    </thead>
    <tbody >
        @foreach($posts as $post)
            <tr class="text-8 table-fixed px-8">
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author_name }}</td>
                <td>
                <div class="text-slate-500 hover:text-blue-800 text-s">
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    Show
                    </a><br>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                    Edit
                    </a><br>
                </div>
                <div class="text-slate-500 hover:text-red-600 text-s">
                    <a href="{{ route('posts.delete', ['post' => $post->id]) }}">
                    Delete
                    </a><br>
                </div>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>
</div>
@endsection
