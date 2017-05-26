<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{getSetting()}}</title>

    <!-- Styles -->
{!! Html::style('public/front/css/bootstrap.min.css') !!}
{!! Html::style('public/front/css/flexslider.css') !!}
{!! Html::style('public/front/css/style.css') !!}
{!! Html::style('public/front/css/font-awesome.min.css') !!}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
{!! Html::script('public/front/js/jquery.min.js') !!}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('css')
</head>
<body>
    <div id="app" class="header">
         <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="{{url('public/front')}}/images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li class="current"><a href="{{url('allbuilding')}}">Home</a></li>
        <li><a href="{{url('about')}}">About Us</a></li>
        <li><a href="{{url('service')}}">Services</a></li>
        <li><a href="{{url('contact')}}">Contact Us</a></li>
        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                   <li><a href="{{url('/pageusers')}}">
                                        {{Auth::user()->name}}
                                    </a></li>
                                    @if(Auth::user()->admin == 1)
                                    <li><a href="{{url('/admin')}}">
                                        {{Auth::user()->name}}
                                        </a></li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
        <div class="clear"></div>
      </ul>
      <script type="text/javascript" src="{{url('public/front')}}/js/responsive-nav.js"></script> 
    </div>
</div>
        @yield('content')
    </div>
    <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
<script src="{{url('public/front')}}/js/bootstrap.min.js"></script> 
<script src="{{url('public/front')}}/js/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $('select').select2();
</script>
@yield('js')
</body>
</html>
