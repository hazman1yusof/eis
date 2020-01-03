@extends('layouts.admin-master')

@section('title')
Diagnosis
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Select Diagnosis</h1>
  </div>

  <div class="section-body">
  	<h2 class="section-title">
      {{$pat_mast->Name}} - MRN {{str_pad($pat_mast->MRN,7,"0",STR_PAD_LEFT)}}
    </h2>

	    <div class="card">
        <div class="card-body">
		  	<form method="POST" action="/diagnosis">
		  		{!! csrf_field() !!}
		  		<div class="form-group">
		  			<label>MRN</label>
		  			<input type="text" name="mrn" class="form-control" value="{{$pat_mast->MRN}}" readonly="">
		  		</div>

		  		<div class="form-group">
		  			<label>Name</label>
		  			<input type="text" name="name" class="form-control" value="{{$pat_mast->Name}}" readonly="">
		  		</div>

		  		<div class="form-group">
		  			<label>Diagnosis</label>
			  		<select class="form-control" name="diagcode">
				        @foreach ($diagnosis as $diag)
		        			<option value="{{$diag->diagcode}}">{{$diag->Description}}</option>
					    @endforeach
				    </select>
				  </div>
			     <hr>
		  		<button type="submit" class="btn btn-primary">Select</button>
		  	</form>
	  	</div>
	  </div>
  </div>
</section>
@endsection
