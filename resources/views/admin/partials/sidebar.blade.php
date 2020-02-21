<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('patient') }}">GKC Study</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a>GKC</a>
  </div>
  <ul class="sidebar-menu">

      @if(Auth::user()->type=='user')

      <li class="{{ Request::route()->getName() == 'patient' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('patient') }}">
          <i class="fa fa-users"></i> <span>Patient</span>
        </a>
      </li>

      <li class="{{ Request::route()->getName() == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('user/'.Auth::user()->id) }}">
          <i class="fa fa-key"></i> <span>Change Password</span>
        </a>
      </li>

      @elseif(Auth::user()->type=='admin')

      <li class="{{ Request::route()->getName() == 'userlist' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('userlist') }}">
          <i class="fa fa-user-circle"></i> <span>Users</span>
        </a>
      </li>

      <li class="{{ Request::route()->getName() == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('user/'.Auth::user()->id) }}">
          <i class="fa fa-key"></i> <span>Change Password</span>
        </a>
      </li>

      @endif

  </ul>
</aside>
