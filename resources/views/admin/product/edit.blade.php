@extends('adminlte::page')

@section('title', 'Edit Product')

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
    {!! Form::open(['url'=>'product/'.$products->id.'/update','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <!--Start Name Field-->
      <div class="form-group">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="{{$products->name}}" id="name" class="form-control">
        </div>
      </div>
    <!--End Name Field-->
    <!--Start Image Field-->
      <div class="form-group">
        <label class="col-sm-2" for="image">Image</label>
        <div class="col-sm-10">
          <input type="file" name="image" class="form-control" id="image" placeholder="Insert Photo">
        </div>
      </div>
    <!--End Image Field-->
    <!--Start Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="price">Price</label>
        <div class="col-sm-10">
          <input type="text" name="price" value="{{$products->price}}" id="price" class="form-control">
        </div>
      </div>
    <!--End Price Field-->
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