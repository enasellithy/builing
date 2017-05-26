@extends('layouts.app')
@section('css')
{!! Html::style('public/css/product.css') !!}
@endsection
@section('content')
<div class="container">
    <div class="col-md-3">
         <h1>{{$bu->bu_name}}</h1>
         <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{url('allbuilding')}}">
                            <i class="glyphicon glyphicon-home"></i>
                            All Building </a>
                        </li>
                        <li>
                            <a href="{{url('forrent')}}">
                            <i class="glyphicon glyphicon-user"></i>
                            Rent </a>
                        </li>
                        <li>
                            <a href="{{url('forbuy')}}">
                            <i class="glyphicon glyphicon-ok"></i>
                            Buy </a>
                        </li>
                        <li>
                            <a href="{{url('house')}}">
                            <i class="glyphicon glyphicon-ok"></i>
                            House </a>
                        </li>
                        <li>
                            <a href="{{url('villa')}}">
                            <i class="glyphicon glyphicon-ok"></i>
                            Villa </a>
                        </li>
                        <li>
                            <a href="{{url('summar')}}">
                            <i class="glyphicon glyphicon-ok"></i>
                            Summar </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
         <h2>Search</h2>
         {!! Form::open(['url'=>'/search','method'=>'get']) !!}
            <ul class="list-unstyled">
                <li>
                <div class="form-group">
                    {!! Form::text('bu_price_to', null, ['class'=>'form-control','placeholder'=>'Price To']) !!}
                </div>
                </li>
                <li>
                <div class="form-group">
                    {!! Form::text('bu_price_from', null, ['class'=>'form-control','placeholder'=>'Price From']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group">
                    {!! Form::select('bu_rooms', roomnumber(), null, ['class'=>'form-control','placeholder'=>'Rooms']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group">
                    {!! Form::select('bu_type', bu_type() , null, ['class'=>'form-control','placeholder'=>'Type']) !!}
                </div>
                </li>
                <li>
                    <div class="form-group">
                    {!! Form::select('bu_rent', bu_rent() , null, ['class'=>'form-control','placeholder'=>'rent']) !!}
                </div>
                </li>
                <li>
                    <div class="form-group">
                    {!! Form::select('bu_place', bu_place() , null, ['class'=>'form-control','placeholder'=>'Place']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group">
                    {!! Form::text('bu_square', null, ['class'=>'form-control','placeholder'=>'Square']) !!}
                </div>
                </li> 
                <li>
                    <div class="form-group">
                    {!! Form::submit('Search', ['class'=>'btn btn-success']) !!}
                </div>
                </li> 
            </ul>
            {!! Form::close() !!}
    </div>
<div class="col-md-9">
    <div class="list-group">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('allbuilding')}}">All Building</a></li>
                <li><a href="{{url('/'.$bu->id.'/show')}}">{{$bu->bu_name}}</a></li>
            </ol>
        </div>
    <div class="thumbnail">
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
        <div class="caption-full">
            <h4 class="pull-right">{{$bu->bu_price}}</h4>
            <h4><a href="{{url('/'.$bu->id.'/show')}}">{{$bu->bu_name}}</a>
            </h4>
            <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <p>Want to make these reviews work? Check out
                <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                </strong>over at maxoffsky.com!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="ratings">
            <p class="pull-right">3 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                4.0 stars
            </p>
        </div>
    </div>
    <div class="well">

        <div class="text-right">
            <div id="map" style="width:100%;height:500px"></div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                @include('build.search',['buAll' => $same_rent])
            </div>
        </div>


    </div>

</div>
</div>
@endsection
@section('js')
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  //var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var myCenter = new google.maps.LatLng({{$bu->bu_place}},{{$bu->bu_langtuide}}); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
@endsection