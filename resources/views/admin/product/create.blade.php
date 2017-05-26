@extends('adminlte::page')

@section('title', 'Create New Product')

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
   <div class="col-lg-6 col-xs-6">
    {!! Form::open(['route'=>'product.store','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!} 
    <!--Start Name Field-->
      <div class="form-group">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" id="name" class="form-control">
        </div>
      </div>
    <!--End Name Field-->
    <!--Start descrption Field-->
      <div class="form-group">
        <label class="col-sm-2" for="desc">descrption</label>
        <div class="col-sm-10">
        <textarea name="desc" id="desc" class="form-control" col="5" rows="3"></textarea>
        </div>
      </div>
    <!--End descrption Field-->
    <!--Start Category Field-->
      <div class="form-group">
        <label class="col-sm-2" for="category_id">Category</label>
        <div class="col-sm-10">
          <select name="category_id" class="form-control">
                @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
              </select>
        </div>
      </div>
    <!--End Category Field-->
    <!--Start Submit Field-->
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-block">
      </div>
    <!--End Submit Field-->
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