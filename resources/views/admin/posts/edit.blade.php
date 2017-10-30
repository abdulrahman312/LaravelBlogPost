@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>

    <div class="row">

        <div class="col-sm-3">

            <img  class="img-rounded" src="{{ $post->photo ? $post->photo->file : '/images/nouser.png' }}"  >
            
        </div>

        <div class="col-sm-9">

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.posts.update', $post->id) }}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $post->title }}" id="title"  name="title">

                        @if ($errors->has('title'))
                            <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="category_id">Category:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('category_id'))
                            <span class="help-block">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="file">Change Photo:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="photo_id"  name="photo_id">

                        @if ($errors->has('photo_id'))
                            <span class="help-block">
                        <strong>{{ $errors->first('photo_id') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="body">Body:</label>
                    <div class="col-sm-10">
                        <textarea rows="4"  class="form-control" id="body"  name="body">{{ $post->body }}</textarea>

                        @if ($errors->has('title'))
                            <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary col-sm-2 ">Edit Post</button>
                    </div>
                </div>

            </form>

            <form class="form-horizontal" method="post" action="{{ route('admin.posts.destroy', $post->id) }}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger col-sm-2 ">Delete Post</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection