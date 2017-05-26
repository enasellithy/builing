@extends('adminlte::page')

@section('title', 'Edit Bu')

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
    {!! Form::open(['url'=>'bu/'.$bus->id.'/update','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!} 
    <!--Start Name Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="bu_name" value="{{$bus->bu_name}}" id="bu_name" class="form-control">
        </div>
      </div>
    <!--End Name Field-->
    <!--Start Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_price">Price</label>
        <div class="col-sm-10">
          <input type="text" name="bu_price" value="{{$bus->bu_price}}" id="bu_price" class="form-control">
        </div>
      </div>
    <!--End Price Field-->
    <!--Start Rent Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_rent">Rent</label>
        <div class="col-sm-10">
          {!! Form::select('bu_rent', bu_rent(), null, ['class' => 'form-control']) !!}
        </div>
      </div>
    <!--End Rent Field-->
    <!--Start Rooms Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_rooms">Rooms</label>
        <div class="col-sm-10">
          <input type="text" name="bu_rooms" value="{{$bus->bu_rooms}}" id="bu_rooms" class="form-control">
        </div>
      </div>
    <!--End Rooms Field-->
    <!--Start Square Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_square">Square</label>
        <div class="col-sm-10">
          <input type="text" name="bu_square" value="{{$bus->bu_square}}" id="bu_square" class="form-control">
        </div>
      </div>
    <!--End Square Field-->
    <!--Start Type Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_type">Type</label>
        <div class="col-sm-10">
          {!! Form::select('bu_type', bu_type(), null, ['class' => 'form-control']) !!}
        </div>
      </div>
    <!--End Type Field-->
    <!--Start Small Description Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_small_dis">Small Description</label>
        <div class="col-sm-10">
          <input type="text" name="bu_small_dis" value="{{$bus->bu_small_dis}}" id="bu_small_dis" class="form-control">
        </div>
      </div>
    <!--End Small Description Field-->
    <!--Start Meta Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_meta">Meta</label>
        <div class="col-sm-10">
          <input type="text" name="bu_meta" value="{{$bus->bu_meta}}" id="bu_meta" class="form-control">
        </div>
      </div>
    <!--End Meta Field-->
    <!--Start Langtuide Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_langtuide">Langtuide</label>
        <div class="col-sm-10">
          <input type="text" name="bu_langtuide" value="{{$bus->bu_langtuide}}" id="bu_langtuide" class="form-control">
        </div>
      </div>
    <!--End Langtuide Field-->
    <!--Start Latitude Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_latitude">Latitude</label>
        <div class="col-sm-10">
          {!! Form::select('bu_place', bu_place() , null, ['class'=>'form-control','placeholder'=>'Place']) !!}
        </div>
      </div>
    <!--End Latitude Field-->
    <!--Start Large Description Field-->
      <div class="form-group">
        <label class="col-sm-2" for="bu_large_dis">Large Description</label>
        <div class="col-sm-10">
        <textarea name="bu_large_dis" id="bu_large_dis" class="form-control" col="5" rows="3">
          {{$bus->bu_large_dis}}
        </textarea>
        </div>
      </div>
    <!--End Large Description Field-->
    <!--Start Status Field--> 
      <div class="form-group">
        <label class="col-sm-2" for="bu_status">Status</label>
        <div class="col-sm-10">
          {!! Form::select('bu_status', bu_status(), null, ['class' => 'form-control']) !!}
        </div>
      </div>
    <!--End Status Field-->
    <!--Start Image Field-->
      <div class="form-group">
        <label class="col-sm-2" for="image">Image</label>
        <div class="col-sm-10">
          <input type="file" name="image" id="image" class="form-control">
        </div>
      </div>
    <!--End Image Field-->
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
      $('select').select2();
    </script>
@stop