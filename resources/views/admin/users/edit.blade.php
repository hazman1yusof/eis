@extends('layouts.admin-master')

@section('title')
Edit Profile ({{ $user->name }})
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Profile</h1>
  </div>
  <div class="section-body">
  	<div class="card card-primary">

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
            <label for="username">Username</label>
            <input id="username" type="username" class="form-control" name="username" value="{{$user->username}}" readonly="">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" autofocus="" value="{{$user->password}}">
            </div>
            <div class="form-group col-6">
              <label for="password_confirmation">Re-type Password</label>
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{$user->password}}">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
          </div>

          <div class="form-group">
            <label for="newic">I/C</label>
            <input id="newic" type="text" class="form-control" name="newic" value="{{$user->newic}}">
          </div>

          <div class="form-group">
            <label for="type">User Type</label>
            <select id="type" name="type" class="form-control">
			  <option value="user" {{ $user->type === 'user' ? 'selected' : '' }}>User</option>
			  <option value="admin" {{ $user->type === 'admin' ? 'selected' : '' }}>Admin</option>
			</select>
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
