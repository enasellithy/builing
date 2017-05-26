@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<!-- Start Message Session-->
<div>
  @if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@if(count($errors) > 0)
 <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif
</div>
<!-- End Message Session-->

<!--Start Table Setting-->
<div class="contanier" style="overflow: hidden;">
  <div class="col-lg-9 col-xs-9">
  <form action="{{url('adminpanel/setting')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
    {{csrf_field()}}
    @foreach($settings as $setting)
    <div class="form-group">
      <label class="col-md-2">{{$setting->slug}}</label>
      <div class="col-md-10">
      @if($setting->type == 0)
      {!! Form::text($setting->setting, $setting->value, ['class'=>'form-control']) !!}
      @elseif($setting->type == 3)
        @if($setting->value != '')
        <img src="{{checkImageIsexist($setting->value, '/public/images/slider/','images/slider/')}}">
        @endif
      {!! Form::file($setting->setting, null, ['class'=>'form-control']) !!}
      @else
      {!! Form::textarea($setting->setting, $setting->value, ['class'=>'form-control']) !!}
      @endif
      </div>
    </div>
    @endforeach
    <!--Start Submit Field-->
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success btn-block">
          Save <i class="fa fa-save"></i>
        </button>
      </div>
    <!--End Submit Field-->
  </form>
</div>
</div>
<!--End Table Setting-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop