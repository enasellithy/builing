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
   <div class="col-lg-6 col-xs-6">
    {!! Form::open(['route'=>'category.store','method'=>'post','class'=>'form-horizontal']) !!}
      <div class="form-group">
        <label class="col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" name="name" id="name" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-block">
      </div>
    {!! Form::close() !!}
   </div>
<!--End Category Form-->

<!--Start Count Category-->
   <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <p>{{$cats->count()}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer">Category<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!--End Count Category-->

<!--Start Table Category-->
   <div class="col-lg-12 col-xs-9">
      <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Created_at</th>
              <th>Control</th>
            </tr>
          </thead>
          <tbody>
          @foreach($cats as $cat)
            <tr>
              <td>{{$cat->id}}</td>
              <td>{{$cat->name}}</td>
              <td>{{date('M j, Y ',strtotime($cat->created_at))}}</td>
              <td>
                <a href="category/{{$cat->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="category/{{$cat->id}}/delete" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      {!! $cats->links() !!}
     </div>
<!--End Table Category-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop