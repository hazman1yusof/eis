@extends('layouts.admin-master')

@section('title')
Edit Patient
@endsection

@section('css')
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Patient - {{$patient->Name}}</h1>
  </div>

  <div class="section-body" >
    <div class="card">
      <div class="card-body">

        @if($errors->any())
        <div class="segment">
          <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
            </ul>
          </div>
        </div>
        @endif

        @if (\Session::has('success'))
        <div class="alert alert-success">
          <ul>
            <li>{!! \Session::get('success') !!}</li>
          </ul>
        </div>
        @endif

        <form method="POST">

          {{csrf_field()}}
          <div class="form-group">
            <div class="row">
              <div class="form-group col-md-8">
                <label for="Name">Patient Name</label>
                <input id="Name" type="text" class="form-control" name="Name" autofocus="" value="{{$patient->Name}}">
              </div>
              <div class="form-group col-md-4">
                <label for="OldMrn">HUKM MRN</label>
                <input id="OldMrn" type="text" class="form-control" name="OldMrn" value="{{$patient->OldMrn}}">
              </div>
            </div>
          </div>


          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Edit
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
@endsection

@section('stylesheet')
@endsection
