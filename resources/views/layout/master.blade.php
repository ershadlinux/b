<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <title>{{ config('app.name', 'Bongah') }}</title>--}}


<!-- Fonts -->
    {{--<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

    {{--<script defer src="https://use.fontawesome.com/releases/[VERSION]/js/all.js"></script>--}}
    {{--<script defer src="https://use.fontawesome.com/releases/[VERSION]/js/v4-shims.js"></script>--}}



    @yield('head')


</head>
{{--<body data-spy="scroll" data-target=".navbar-inverse" >--}}


<body>

{{--<div class="container">--}}

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
            {{--            <img src="{{ asset('images/bg_pic1.jpg') }}" alt="Los Angeles" style="width:100%;">--}}
            <img src="{{url('images/bg_pic1.jpg')}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
            </div>
        </div>

        <div class="item">
            {{--            <img src="{{ asset('images/bg_pic2.jpg') }}" alt="Chicago" style="width:100%;">--}}
            <img src="{{url('images/bg_pic2.jpg')}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>
        </div>

        <div class="item">
            {{--            <img src="{{ asset('images/bg_pic3.jpg') }}" alt="New York" style="width:100%;">--}}
            <img src="{{url('images/bg_pic3.jpg')}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>

        <div class="item">
            {{--            <img src="{{ asset('images/bg_pic4.jpg') }}" alt="New York" style="width:100%;">--}}
            <img src="{{url('images/bg_pic4.jpg')}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{--</div>--}}

{{--<div class="container">--}}


<nav class="navbar navbar-inverse">

    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
            {{--{{ config('app.name', 'Bongah‌‌') }}--}}
            {{--</a>--}}
            <a class="navbar-brand" href="{{ url('/') }}">
                Bongah
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">


                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{url('home')}}">Home</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{URL::to('about')}}">About Us</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{URL::to('contact')}}">Contact us</a>
                </li>
                <li class="{{ Request::is('project') ? 'active' : '' }}"><a href="{{URL::to('project')}}">project</a>
{{--                <li class="{{ Request::is('project2') ? 'active' : '' }}"><a href="{{URL::to('project2')}}">project2</a>--}}
                </li>


                {{--                <li class="{{ Request::is('project2') ? 'active' : '' }}"><a href="{{URL::to('project2')}}">project</a>    </li>--}}

                {{--<li class="active"><a href="/homemain">Home</a></li>--}}
                {{--<li><a href="/allposts">Post</a></li>--}}
                {{--<li><a href="{{ url('aboutus') }}">about us</a></li>--}}
                {{--<li><a href="#">about us</a></li>--}}
                {{--<li><a href="{{ url('contactus') }}">contact us</a></li>--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li>
                        <li><a href=" {{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    </ul>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                'Hi'  {{ Auth::user()->name }}
                                 <span class="glyphicon glyphicon-log-out"></span>
                                {{--<span class="caret"></span>--}}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
            </ul>
        </div>
    </div>
</nav>


{{--@if(count($errors))--}}
{{--<ul>--}}
{{--@foreach($errors->all() as $error)--}}
{{--<div class="alert alert-danger alert-dismissable fade in">--}}
{{--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
{{--{{$error}}--}}
{{--</div>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--@endif--}}


<div id="app">
    <div class="content">
        <div class="container">


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger  alert-dismissible fade in ">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                        <strong>Danger!</strong> {{ $error }}
                    </div>
                @endforeach
            @endif



            {{--<example-component></example-component>--}}
            @yield('content')
        </div>
    </div>
</div>


{{--</div>--}}
{{--<div id="app">--}}
{{--<example-component></example-component>--}}
{{--</div>--}}






{{--//for old and new version--}}
{{--<script type="text/javascript">--}}
{{--var newJQuery = jQuery.noConflict(true),--}}
{{--oldJQuery = jQuery;--}}

{{--(function ($) {--}}
{{--// new jquery code--}}
{{--}(newJQuery));--}}

{{--(function ($) {--}}
{{--old jquery code--}}
{{--}(oldJQuery));--}}
{{--</script>--}}


{{--<script src="/js/bootstrap.min.js"></script>--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--<script src="/js/jquery-2.1.1.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <script src="{{ asset('js/myjs.js') }}"></script>--}}


<footer>

    <hr>
    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-md btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-md btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>

            <li class="list-inline-item">
                <a class="btn-floating btn-md btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>


            <li class="list-inline-item">
                <a class="btn-floating btn-md btn-dribbble mx-1">
                    <i class="fa fa-github"> </i>
                </a>
            </li>


        </ul>
    </div>
    <!--/.Social buttons-->


    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">


        © <?php echo date("Y");?> Copyright:
        <a href="http://eriak.ir/"> eriak.ir </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- Scripts -->
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}


<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('js/all.js') }}"></script>--}}
<script src="{{ asset('/js/myjs.js') }}"></script>
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script src="{{ asset('/js/dropzone.js') }}"></script>--}--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>--}}

 <script>
$('div.alert').delay(4000).slideUp(500);
 </script>

@include('flash')
</body>
</html>
