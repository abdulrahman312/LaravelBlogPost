@extends('layouts.admin')




@section('content')

    <h1>Create Users</h1>

    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.users.store') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">

              @if ($errors->has('name'))
                  <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
              @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="role_id">Role:</label>
            <div class="col-sm-10">
                <select class="form-control" id="role_id" name="role_id">
                    <option  value="" selected>Choose option</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>

                @if ($errors->has('role_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="is_active">Status:</label>
            <div class="col-sm-10">
                <select class="form-control" id="is_active" name="is_active">
                    <option value="" selected>Choose Option</option>
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>
                </select>

                @if ($errors->has('is_active'))
                    <span class="help-block">
                        <strong>{{ $errors->first('is_active') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="file">File:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="file" placeholder="Select File" name="file">

                @if ($errors->has('file'))
                    <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2" for="password">Email:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Create User</button>
          </div>
        </div>
    </form>





@endsection