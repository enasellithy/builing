@extends('adminlte::page')

@section('title', 'Create New User')

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

<!--Start Users Form-->
   <div class="col-lg-6 col-xs-6">
    {!! Form::open(['route'=>'users.store','method'=>'post','class'=>'form-horizontal']) !!}
    <!--Start Name Field-->
      <div class="form-group">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" id="name" class="form-control">
        </div>
      </div>
    <!--End Name Field-->
    <!--Start Email Field-->
      <div class="form-group">
        <label class="col-sm-2" for="email">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" id="email" class="form-control">
        </div>
      </div>
    <!--End Email Field-->
    <!--Start Password Field-->
      <div class="form-group">
        <label class="col-sm-2" for="password">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" id="password" class="form-control">
        </div>
      </div>
    <!--End Password Field-->
    <!--Start Submit Field-->
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-block">
      </div>
    <!--End Submit Field-->
    {!! Form::close() !!}
   </div>
<!--End Users Form-->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop