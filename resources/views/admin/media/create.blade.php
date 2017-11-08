@extends('layouts.admin')


@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">

@endsection

@section('content')

    <h1>Upload Media</h1>

        <form class="form-horizontal dropzone" method="post" enctype="multipart/form-data" action="{{ route('admin.media.store') }}">
                {{ csrf_field() }}


            </form>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

@endsection