@extends('layouts.app')
@section('css')
{!! Html::style('public/css/style.css') !!}
@endsection
@section('content')
<div class="container">
	<div class="row">
       <div class="col-lg-2 col-md-2">
        <br /><br />
        <div class="profile-sidebar">
                @if(Auth::id())
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                      <h4>Choose {{Auth::user()->name}}</h4> 
                      <div>
                        <a href="mybuild/{{Auth::id()}}/show" class="btn brn-info">
                            Show My Build
                        </a>
                        <a href="{{url('addbuild/user')}}" class="btn brn-info">
                            Add New Build
                        </a>
                      </div> 
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                @endif
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
            </div>
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

       <div class="col-lg-9 col-md-9">
        <ol class="breadcrumb">
  @if(isset($array))
    @if(!empty($array))
    @foreach($array as $key => $value)
        <li><a href="{{url('/search?'.$key.'='.$value)}}">{{searchNameField()[$key]}} -> {{$value}}</a></li>
        @if($key == 'bu_type')
        {{bu_type()[$value]}}
        @elseif($key == 'bu_rent')
        {{bu_rent()[$value]}}
        @elseif($key == 'bu_place')
        {{bu_place()[$value]}}
        @else
        {{$value}}
        @endif
    @endforeach
    @endif
  @endif
</ol>
        @include('build.search')
       </div>
       {{$buAll->links()}}
	</div>
</div>

@endsection
@section('js')
{!! Html::script('public/js/plugins.js') !!}
@endsection