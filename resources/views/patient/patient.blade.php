@extends('layouts.admin-master')

@section('title')
Patients
@endsection

@section('css')

  table.dataTable tbody tr.selected a, table.dataTable tbody th.selected a, table.dataTable tbody td.selected a{
    color: #ffffff;
  }

  table.dataTable tbody>tr.selected, table.dataTable tbody>tr>.selected{
    background-color: #9cc6ea;
  }

@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Patient List</h1>
  </div>

  <div class="section-body" >
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        	<table id="example" class="table table-striped">
              <thead>
                  <tr>
                      <th>MRN</th>
                      <th>Name</th>
                      <th>New IC</th>
                      <th>telhp</th>
                      <th>telh</th>
                      <th>Episode</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <!-- <tbody>
              	@foreach ($pat_mast as $user)
              	<tr>
                      <td>{{$user->MRN}}</td>
                      <td>{{$user->Name}}</td>
                      <td>{{$user->Newic}}</td>
                      <td>{{$user->telhp}}</td>
                      <td>{{$user->telh}}</td>
                      <td>{{$user->Episno}}</td>
                      <td><a href="./study/{{$user->MRN}}" class="btn btn-sm btn-primary">Study</a></td>
                  </tr>
      			    @endforeach
              </tbody> -->
              <tfoot>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
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
<script src="{{ asset('assets/js/patient.js') }}"></script>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->

<script src="{{ asset('assets/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" ></script>
@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" >
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
@endsection
