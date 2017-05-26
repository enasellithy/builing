@extends('adminlte::page')

@section('title', 'Control Building')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
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
<a href="{{route('bu.create')}}" class="btn btn-info">Create Bu</a>
<!--Start Users-->
   <table class="table table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Rent</th>
        <th>Square</th>
        <th>Type</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bus as $bu)
      <tr>
        <td>{{$bu->id}}</td>
        <td>{{$bu->bu_name}}</td>
        <td>{{$bu->bu_price}}</td>
        <td>{{$bu->bu_rent}}</td>
        <td>{{$bu->bu_square}}</td>
        <td>{{$bu->bu_type}}</td>
        <td>
          <a href="bu/{{$bu->id}}/edit" class="btn btn-primary">Edit</a>
          <a href="bu/{{$bu->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $bus->links() !!}
<!--End Users-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop