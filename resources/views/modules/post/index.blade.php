@extends('app')
@section('content')
    <a class="" href="@route('post.create')">Create new post</a>
    <table class="table table-striped container">
        <thead>
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">Title</th>
                <th scope="col">Short Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $post->title }}</td>
                    <td> {{ $post->short_des }} </td>
                    <td> <a href="@route('post.edit', $post->post_id)">Edit</a> |
                        <form method="POST" action="@route('post.destroy', $post->post_id)">
                            @csrf
                            @method('Delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <h2>Data not found</h2>
            @endforelse
        </tbody>
    </table>
@endsection
