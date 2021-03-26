<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('patient') }}">EIS</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a>EIS</a>
  </div>
  <ul class="sidebar-menu">

      <!-- @if(Auth::user()->type=='user') -->

      <li class="{{ Request::route()->getName() == 'eis' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('eis') }}">
          <i class="fa fa-chart-bar"></i> <span>Episode Statistics</span>
        </a>
      </li>

      <li class="{{ Request::route()->getName() == 'reveis' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('reveis') }}">
          <i class="fa fa-chart-line"></i> <span>Revenue By Services</span>
        </a>
      </li>

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

      <!-- @elseif(Auth::user()->type=='admin')

      <li class="{{ Request::route()->getName() == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('user/'.Auth::user()->id) }}">
          <i class="fa fa-key"></i> <span>Change Password</span>
        </a>
      </li>

      @endif -->

  </ul>
</aside>
