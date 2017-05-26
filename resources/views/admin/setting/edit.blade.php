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

<!--Start Setting-->
   <div class="col-lg-6 col-xs-6">
    {!! Form::open(['url'=>'setting/'.$settings->id.'/store','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <!--Start Slug Field-->
      <div class="form-group">
        <label class="col-sm-2" for="slug">Slug</label>
        <div class="col-sm-10">
          <input type="text" name="slug" value="{{$settings->slug}}" id="slug" class="form-control">
        </div>
      </div>
    <!--End Slug Field-->
    <!--Start Setting Field-->
      <div class="form-group">
        <label class="col-sm-2" for="setting">Setting</label>
        <div class="col-sm-10">
          <input type="text" name="setting" value="{{$settings->setting}}" id="setting" class="form-control">
        </div>
      </div>
    <!--End Setting Field-->
    <!--Start Value Field-->
      <div class="form-group">
        <label class="col-sm-2" for="value">Value</label>
        <div class="col-sm-10">
          <input type="text" name="value" value="{{$settings->value}}" id="value" class="form-control">
        </div>
      </div>
    <!--End Value Field-->
    <!--Start Submit Field-->
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-block">
      </div>
    <!--End Submit Field-->
    {!! Form::close() !!}
   </div>
<!--End Setting-->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop