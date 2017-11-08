@extends('layouts.blog-post')

@section('content')

    <h1>Posts</h1>

    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{ $post->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{ $post->photo->file }}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">
        {{ $post->body }}
    </p>
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form role="form" method="POST" action="{{ route('admin.comments.store') }}">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <textarea name="body" class="form-control" rows="3"></textarea>
                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    <div class="container">
        <div class="page-header">
            <h3 class="reviews">Comments</h3>
        </div>
        <ul class="media-list">

    @foreach($post->comments as $comment)

                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-circle" src="{{ $comment->photo->file }}" alt="profile">
                    </a>
                    <div class="media-body">
                        <div class="well well-lg">
                            <header class="text-left">
                                <div class="comment-user"><i class="fa fa-user"></i>  {{ $comment->author }}</div>
                                <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i>  {{ $comment->created_at->diffForHumans() }}</time>
                            </header>
                            <p class="media-comment">
                                {{ $comment->body }}
                            </p>
                            <a class="btn btn-warning  text-uppercase" data-toggle="collapse" href="#{{ $comment->id }}"><span class="glyphicon glyphicon-comment"></span>  Reply({{ $comment->replyCount($comment->id) }})</a>
                        </div>
                    </div>
                </li>

                <div class="collapse" id="{{ $comment->id }}">
                    <ul class="media-list">

                        <li class="media media-replied">
                            <div class="media-body">
                                <div class="well well-md col-sm-offset-1">
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.comment.replies.store') }}">
                                                {{ csrf_field() }}
                                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <div class="row">
                                                        <div class="col-sm-2"><button style="display:block; margin: auto;" type="submit" href="{{ route('admin.comment.replies.store') }}" class="btn btn-primary">Submit</button></div>
                                                        <div class="col-sm-10"><input style="display:block; margin: auto;" type="text" class="form-control" id="body" placeholder="Reply" name="body"></div>


                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </form>
                                </div>
                            </div>
                        </li>
                        @if($comment->replies)
                            @foreach($comment->replies as $reply)
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="{{ $reply->photo->file }}" alt="profile">
                                    </a>
                                    <div class="media-body">
                                        <div class="well well-lg">
                                            <header class="text-left">
                                                <div class="comment-user"><i class="fa fa-user"></i>  {{ $reply->author }}</div>
                                                <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i>  {{ $reply->created_at->diffForHumans() }}</time>
                                            </header>
                                            <p class="media-comment">
                                                {{ $reply->body }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif


                    </ul>
                </div>

    @endforeach
        </ul>



    </div>


    {{--<!-- Comment -->--}}
    {{--<div class="media">--}}
        {{--<a class="pull-left" href="#">--}}
            {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
        {{--</a>--}}
        {{--<div class="media-body">--}}
            {{--<h4 class="media-heading">Start Bootstrap--}}
                {{--<small>August 25, 2014 at 9:30 PM</small>--}}
            {{--</h4>--}}
            {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
            {{--<!-- Nested Comment -->--}}
            {{--<div class="media">--}}
                {{--<a class="pull-left" href="#">--}}
                    {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                {{--</a>--}}
                {{--<div class="media-body">--}}
                    {{--<h4 class="media-heading">Nested Start Bootstrap--}}
                        {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                    {{--</h4>--}}
                    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Nested Comment -->--}}
        {{--</div>--}}
    {{--</div>--}}



@stop