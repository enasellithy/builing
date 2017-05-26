@extends('adminlte::page')

@section('title', 'Users')

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
<a href="{{route('users.create')}}" class="btn btn-info">Create Users</a>
<!--Start Users-->
   <table class="table table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <a href="users/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users->links() !!}
<!--End Users-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop