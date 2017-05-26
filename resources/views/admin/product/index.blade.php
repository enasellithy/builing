@extends('adminlte::page')

@section('title', 'Product')

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

<!--Start Product-->
   <div class="col-lg-3 col-xs-6">
    <a href="{{route('product.create')}}" class="btn btn-success">Add New Product</a>
   </div>
<!--End Product-->

<!--Start Table Category-->
   <div class="col-lg-12 col-xs-9">
      <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Category</th>
              <th>Created_at</th>
              <th>Control</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{App\Category::find($product->category_id)->name}}</td>
              <td>{{date('M j, Y ',strtotime($product->created_at))}}</td>
              <td>
                <a href="product/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="product/{{$product->id}}/delete" class="btn btn-danger">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      {!! $products->links() !!}
     </div>
<!--End Table Category-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop