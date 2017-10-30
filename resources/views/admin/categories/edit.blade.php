@extends('layouts.admin')


@section('content')

    <h1>Create Category</h1>

    <form class="form-horizontal" method="post"  action="{{ route('admin.categories.update', $category->id) }}">
        {{ csrf_field() }}

        <input name="_method" type="hidden" value="PATCH">

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="name">Category Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $category->name }}" id="name"  name="name">

                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg">Edit Category</button>
            </div>
        </div>
    </form>

        <form class="form-horizontal" method="post"  action="{{ route('admin.categories.destroy', $category->id) }}">
                {{ csrf_field() }}
         <input name="_method" type="hidden" value="DELETE">

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger btn-lg">Delete Category</button>
                </div>
            </div>

        </form>

@endsection