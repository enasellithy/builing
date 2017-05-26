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
<link rel="stylesheet" href="{{url('public/front/product')}}/css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="{{url('public/front/product')}}/css/style.css"> <!-- Resource style -->
<script src="{{url('public/front/product')}}/js/modernizr.js"></script> <!-- Modernizr -->
{!! Html::style('public/front/css/style.css') !!}
{!! Html::style('public/front/css/font-awesome.min.css') !!}
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
    <div id="header">
         <div class="container"> 
          <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
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
    </div>
   <div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>{{getSetting()}}</h1>
      <p>
         {!! Form::open(['url'=>'/search','method'=>'get']) !!}
            <ul class="list-unstyled">
                <li>
                <div class="form-group col-sm-3">
                    {!! Form::text('bu_price_to', null, ['class'=>'form-control','placeholder'=>'Price To']) !!}
                </div>
                </li>
                <li>
                <div class="form-group col-sm-3">
                    {!! Form::text('bu_price_from', null, ['class'=>'form-control','placeholder'=>'Price From']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group col-sm-3">
                    {!! Form::select('bu_rooms', roomnumber(), null, ['class'=>'form-control','placeholder'=>'Rooms']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group col-sm-3">
                    {!! Form::select('bu_type', bu_type() , null, ['class'=>'form-control','placeholder'=>'Type']) !!}
                </div>
                </li>
                <li>
                    <div class="form-group col-sm-3">
                    {!! Form::select('bu_rent', bu_rent() , null, ['class'=>'form-control','placeholder'=>'rent']) !!}
                </div>
                </li>
                <li>
                    <div class="form-group col-sm-3">
                    {!! Form::select('bu_place', bu_place() , null, ['class'=>'form-control','placeholder'=>'Place']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group col-sm-3">
                    {!! Form::text('bu_square', null, ['class'=>'form-control','placeholder'=>'Square']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group col-md-12">
                    {!! Form::submit('Search', ['class'=>'btn btn-success btn-larag']) !!}
                </div>
                </li> 
            </ul>
            {!! Form::close() !!}
      </p>
  </div>
</div>
</div>
<br />
<div class="main">
<ul class="cd-items cd-container">
    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->

    <li class="cd-item">
      <img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Item Preview">
      <a href="#0" class="cd-trigger">Quick View</a>
    </li> <!-- cd-item -->
  </ul> <!-- cd-items -->

  <div class="cd-quick-view">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="{{url('public/front/product')}}/img/item-1.jpg" alt="Product 1"></li>
        <li><img src="{{url('public/front/product')}}/img/item-2.jpg" alt="Product 2"></li>
        <li><img src="{{url('public/front/product')}}/img/item-3.jpg" alt="Product 3"></li>
      </ul> <!-- cd-slider -->

      <ul class="cd-slider-navigation">
        <li><a class="cd-next" href="#0">Prev</a></li>
        <li><a class="cd-prev" href="#0">Next</a></li>
      </ul> <!-- cd-slider-navigation -->
    </div> <!-- cd-slider-wrapper -->

    <div class="cd-item-info">
      <h2>Produt Title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique reiciendis, maxime laborum praesentium.</p>

      <ul class="cd-item-action">
        <li><button class="add-to-cart">Add to cart</button></li>         
        <li><a href="#0">Learn more</a></li>  
      </ul> <!-- cd-item-action -->
    </div> <!-- cd-item-info -->
    <a href="#0" class="cd-close">Close</a>
  </div> <!-- cd-quick-view -->
<div class="about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>About Our Company</span></h2>
        </div>
        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
        <br>
        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <a class="banner_btn" href="about.html">Read More</a> </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Our Advantages</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor </a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>120+ Happy Clients</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>600+ Projects Completed</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
          <h4>25 Awards Won</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 Offices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Client Testimonials</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Jane Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Smith -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Linda Smith -</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> 
      <a class="fa fa-facebook social-icon" href="{{getSetting('facebook')}}"></a> 
      <a class="fa fa-twitter social-icon" href="#"></a> 
      <a class="fa fa-linkedin social-icon" href="#"></a> 
      <a class="fa fa-google-plus social-icon" href="#"></a> 
    </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
<script src="{{url('public/front')}}/js/bootstrap.min.js"></script> 
<script src="{{url('public/front')}}/js/jquery.flexslider.js"></script>
<script src="{{url('public/front/product')}}/js/velocity.min.js"></script>
<script src="{{url('public/front/product')}}/js/main.js"></script>
</body>
</html>