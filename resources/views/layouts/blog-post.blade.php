<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <style>/*font Awesome http://fontawesome.io*/
        /*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

        #login { display: none; }
        .login,
        .logout {
            position: absolute;
            top: -3px;
            right: 0;
        }
        .page-header { position: relative; }
        .reviews {
            color: #555;
            font-weight: bold;
            margin: 10px auto 20px;
        }
        .notes {
            color: #999;
            font-size: 12px;
        }
        .media .media-object { max-width: 120px; }
        .media-body { position: relative; }
        .media-date {
            position: absolute;
            right: 25px;
            top: 25px;
        }

        .comment-user {
            color: #9aa5ff;
        }

        .comment-date{
            color : #9aa5ff;
        }
        .media-comment { margin-bottom: 20px; }
        .media-replied { margin: 0 0 20px 50px; }
        .media-replied .media-heading { padding-left: 6px; }

        .btn-circle {
            font-weight: bold;
            font-size: 12px;
            padding: 6px 15px;
            border-radius: 20px;
        }
        .btn-circle span { padding-right: 6px; }
        .embed-responsive { margin-bottom: 20px; }
        .tab-content {
            padding: 50px 15px;
            border: 1px solid #ddd;
            border-top: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        input[type="file"]{
            z-index: 999;
            line-height: 0;
            font-size: 0;
            position: absolute;
            opacity: 0;
            filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
            margin: 0;
            padding:0;
            left:0;
        }
        .uploadPhoto {
            position: absolute;
            top: 25%;
            left: 25%;
            display: none;
            width: 50%;
            height: 50%;
            color: #fff;
            text-align: center;
            line-height: 60px;
            text-transform: uppercase;
            background-color: rgba(0,0,0,.3);
            border-radius: 50px;
            cursor: pointer;
        }
        .custom-input-file:hover .uploadPhoto { display: block; }
        </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            @yield('content')

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Category</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
{{--<script src="{{asset('js/libs.js')}}"></script>--}}


<script src="{{asset('js/jquery.js')}}"></script>

<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/metisMenu.js')}}"></script>

<script src="{{asset('js/sb-admin-2.js')}}"></script>

<script src="{{asset('js/scripts.js')}}"></script>

</body>

</html>
