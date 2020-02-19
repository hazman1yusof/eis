@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection

@section('content')
<section class="section">
  <div class="section-header" style="display: block;">
    <h1>Manage Users</h1>
    <a href="{{url('/user')}}" class="btn btn-icon btn-success" style="float: right;" tabindex="0" role="button" data-toggle="popover" data-trigger="hover" data-content="Add New User"><i class="fas fa-plus"></i></a>
  </div>

  <div class="section-body">
  	<div class="card">
      <div class="card-body">
        <div class="table-responsive">
        	<table id="example" class="table table-striped">
              <thead>
                  <tr>
                      <th>User Id</th>
                      <th>Username</th>
                      <th>Type</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              	@foreach ($users as $user)
              	  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->type}}</td>
                      <td>
                      	<a href="{{url('/user/'.$user->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                      	<a href="{{url('/user/delete/'.$user->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                  </tr>
      			@endforeach
              </tbody>
              <tfoot>
                  <tr>
                      <th>User Id</th>
                      <th>Username</th>
                      <th>Type</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
          </table>
        </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/users.js') }}"></script>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->

<script src="{{ asset('assets/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" ></script>
@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" >
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
@endsection