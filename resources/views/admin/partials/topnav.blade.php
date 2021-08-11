<form class="form-inline mr-auto">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
  </ul>

  @if(Request::route()->getName() == 'dashboard' || Request::route()->getName() == 'home')
  <div class="form-group">
    <select class="form-control" name="units">
      @foreach ($units_ as $key_units => $obj_units)
      <option @if( request()->get('units') ==  $obj_units->units) {{'selected'}} @endif>{{$obj_units->units}}</option>
      @endforeach
    </select>
  </div>

  <div class="search-element">
    <input class="form-control" value="@if( !empty(request()->get('date')) ){{request()->get('date')}}@else{{ Carbon\Carbon::now('Asia/Kuala_Lumpur')->format('Y-m')}}@endif" name="date" type="month" >
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    <!-- <div class="search-backdrop"></div> -->
  </div>
  @endif
</form>
<ul class="navbar-nav navbar-right">
  <li class="dropdown">
    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
    <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
    <div class="d-sm-none d-lg-inline-block">{{Auth::user()->username}}</div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <a href="{{ url('user/'.Auth::user()->id) }}" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile
      </a>
      <!-- <div class="dropdown-title">Logged in 5 min ago</div>
      <a href="features-profile.html" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile
      </a>
      <a href="features-activities.html" class="dropdown-item has-icon">
        <i class="fas fa-bolt"></i> Activities
      </a>
      <a href="features-settings.html" class="dropdown-item has-icon">
        <i class="fas fa-cog"></i> Settings
      </a> -->
      <div class="dropdown-divider"></div>
      <a href="{{url('logout')}}" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </li>

</ul>
