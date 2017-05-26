@extends('adminlte::page')

@section('title', 'Category')

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

<!--Start Category Form-->
   <div class="col-lg-3 col-xs-6">
    {!! Form::open(['url'=>'category/'.$cats->id.'/update','method'=>'post','class'=>'form-horizontal']) !!}
      <div class="form-group">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="{{$cats->name}}" id="name" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-block">
      </div>
    {!! Form::close() !!}
   </div>
<!--End Category Form-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop