@extends('layouts.admin');


@section('content')

    <h1>Categories</h1>

    @if(Session::has('category_created'))
        <div class="alert alert-success">
            {{ session('category_created') }}
        </div>
    @elseif(Session::has('category_edited'))
        <div class="alert alert-info">
            {{ session('category_edited') }}
        </div>
    @elseif(Session::has('category_deleted'))
        <div class="alert alert-danger">
            {{ session('category_deleted') }}
        </div>
    @elseif(Session::has('sorry'))
        <div class="alert alert-warning">
            {{ session('sorry') }}
        </div>
    @endif

    <table class="table">
       <thead>
         <tr>
            <th>Category Id</th>
            <th>Category Name</th>
          </tr>
        </thead>
        <tbody>

            @foreach($categories as $category)
                <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                </tr>
            @endforeach

       </tbody>
    </table>

@endsection