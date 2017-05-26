@extends('adminlte::page')

@section('title', 'Create New Supply')

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
   <div class="col-lg-9 col-xs-6">
    {!! Form::open(['route'=>'supply.store','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <!--Start The Quantity Field-->
      <div class="form-group">
        <label class="col-sm-2" for="thequantity">The Quantity</label>
        <div class="col-sm-10">
          <input type="text" name="thequantity" id="thequantity" class="form-control">
        </div>
      </div>
    <!--End The Quantity Field-->
    <!--Start Price Qty Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Priceqty">Price Qty</label>
        <div class="col-sm-10">
          <input type="text" name="Priceqty" id="Priceqty" class="form-control">
        </div>
      </div>
    <!--End Price Qty Field-->
    <!--Start Unit Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="unitprice">Unit Price</label>
        <div class="col-sm-10">
          <input type="text" name="unitprice" id="unitprice" class="form-control">
        </div>
      </div>
    <!--End Unit Price Field-->
    <!--Start Wholesale Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Wholesaleprice">Wholesale Price</label>
        <div class="col-sm-10">
          <input type="text" name="Wholesaleprice" id="Wholesaleprice" class="form-control">
        </div>
      </div>
    <!--End Wholesale Price Field-->
    <!--Start Unit Cost Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Unitcost">Unit Cost</label>
        <div class="col-sm-10">
          <input type="text" name="Unitcost" id="Unitcost" class="form-control">
        </div>
      </div>
    <!--End Unit Cost Field-->
    <!--Start Product Field-->
      <div class="form-group">
        <label class="col-sm-2" for="category_id">Product</label>
        <div class="col-sm-10">
          <select name="product_id" class="form-control">
                @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
              </select>
        </div>
      </div>
    <!--End Product Field-->
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