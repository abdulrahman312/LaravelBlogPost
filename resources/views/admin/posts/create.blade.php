@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title"  name="title">

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
                    <option  value="" selected>Choose option</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
            <label class="control-label col-sm-2" for="file">File:</label>
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
                <textarea rows="4" class="form-control" id="body"  name="body"></textarea>

                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
        </div>

    </form>



@endsection