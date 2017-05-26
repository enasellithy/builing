@extends('adminlte::page')

@section('title', 'Edit Supply')

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

<!--Start Supply Form-->
   <div class="col-lg-9 col-xs-6">
    {!! Form::open(['url'=>'supply/'.$supply->id.'/update','method'=>'post','class'=>'form-horizontal']) !!}
    <!--Start The Quantity Field-->
      <div class="form-group">
        <label class="col-sm-2" for="thequantity">The Quantity</label>
        <div class="col-sm-10">
          <input type="text" name="thequantity" value="{{$supply->thequantity}}" id="thequantity" class="form-control">
        </div>
      </div>
    <!--End The Quantity Field-->
    <!--Start Price Qty Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Priceqty">Price Qty</label>
        <div class="col-sm-10">
          <input type="text" name="Priceqty" value="{{$supply->Priceqty}}" id="Priceqty" class="form-control">
        </div>
      </div>
    <!--End Price Qty Field-->
    <!--Start Unit Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="unitprice">Unit Price</label>
        <div class="col-sm-10">
          <input type="text" name="unitprice" value="{{$supply->unitprice}}" id="unitprice" class="form-control">
        </div>
      </div>
    <!--End Unit Price Field-->
    <!--Start Wholesale Price Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Wholesaleprice">Wholesale Price</label>
        <div class="col-sm-10">
          <input type="text" name="Wholesaleprice" value="{{$supply->Wholesaleprice}}" id="Wholesaleprice" class="form-control">
        </div>
      </div>
    <!--End Wholesale Price Field-->
    <!--Start Unit Cost Field-->
      <div class="form-group">
        <label class="col-sm-2" for="Unitcost">Unit Cost</label>
        <div class="col-sm-10">
          <input type="text" name="Unitcost" value="{{$supply->Unitcost}}" id="Unitcost" class="form-control">
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
<!--End Supply Form-->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop