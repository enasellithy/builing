@extends('adminlte::page')

@section('title', 'Contact')

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
    <a href="{{url('supply/create')}}" class="btn btn-success">Add New Supply</a>
   </div>
<!--End Product-->

<!--Start Count Supply-->
   <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <p>{{$contacts->count()}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer">Contact<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!--End Count Supply-->

<!--Start Table Store-->
   <div class="col-lg-12 col-xs-9">
      <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>type</th>
              <th>Created_at</th>
              <th>Control</th>
            </tr>
          </thead>
          <tbody>
          @foreach($contacts as $contact)
            <tr>
              <td>{{$contact->id}}</td>
              <td>{{$contact->contact_name}}</td>
              <td>{{$contact->contact_mail}}</td>
              <td>{{$contact->contact_subject}}</td>
              <td>{{$contact->contact_type}}</td>
              <td>{{date('M j, Y ',strtotime($contact->created_at))}}</td>
              <td>
                <a href="supply/{{$contact->id}}/show" class="btn btn-info">Show</a>
                <a href="supply/{{$contact->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="supply/{{$contact->id}}/delete" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      
     </div>
<!--End Table Store-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop