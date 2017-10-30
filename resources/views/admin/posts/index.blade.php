@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    @if(Session::has('post_created'))
        <div class="alert alert-success">
            {{ session('post_created') }}
        </div>
    @elseif(Session::has('post_edited'))
        <div class="alert alert-info">
            {{ session('post_created') }}
        </div>
    @elseif(Session::has('post_deleted'))
        <div class="alert alert-danger">
            {{ session('post_deleted') }}
        </div>
    @endif

    <table class="table">
       <thead>
         <tr>
             <th>Id</th>
             <th>User</th>
             <th>Category</th>
             <th>Photo</th>
             <th>Title</th>
             <th>Body</th>
             <th>Created</th>
             <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>
                        @if(Auth::user()->name == $post->user->name)
                                <a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->id }}</a>
                            @else
                                {{ $post->id }}
                        @endif
                    </td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td><img height="50" class="img-rounded" src="{{ $post->photo ? $post->photo->file : '/images/nouser.png' }}"  ></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ str_limit($post->body, 7) }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
       </tbody>
    </table>

@endsection