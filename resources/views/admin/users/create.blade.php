@extends('layouts.admin-master')

@section('title')
Create User
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add User</h1>
  </div>
  <div class="section-body">
  	<div class="card card-primary">

      <div class="card-body"> 

      	@if($errors->any())
		<div class="segment">
			<div class="ui error message">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
		</div>
		@endif
        <form method="POST">

		{{csrf_field()}}
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="username" class="form-control" name="username">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" autofocus="">
            </div>
            <div class="form-group col-6">
              <label for="password_confirmation">Re-type Password</label>
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email">
          </div>

          <div class="form-group">
            <label for="newic">I/C</label>
            <input id="newic" type="text" class="form-control" name="newic">
          </div>

          <div class="form-group">
            <label for="type">User Type</label>
            <select id="type" name="type" class="form-control">
      			  <option value="user">User</option>
      			  <option value="admin">Admin</option>
      			</select>
          </div>

          
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Register
            </button>
          </div>

        </form>

       

      </div>

    </div>
  </div>
</section>
@endsection
