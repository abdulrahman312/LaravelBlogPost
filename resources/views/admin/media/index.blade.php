@extends('layouts.admin')


@section('content')

    <h1>Media</h1>

    @if($photos)

        <table class="table">
           <thead>
             <tr>
                <th>Photo Id</th>
                <th>Path</th>
              </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)

                <tr>
                    <td>{{ $photo->id }}</td>
                    <td><img height="50" src="{{ $photo->file ? $photo->file : '/images/nouser.png'}}" ></td>
                    <td>
                        <form method="post" action="{{ route('admin.media.destroy', $photo->id) }}">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach
           </tbody>
        </table>

    @endif

@endsection