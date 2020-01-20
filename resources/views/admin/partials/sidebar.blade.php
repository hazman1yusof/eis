<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('patient') }}">MEDICSOFT</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a>MS</a>
  </div>
  <ul class="sidebar-menu">
      <li class="{{ Request::route()->getName() == 'patient' ? ' active' : '' }}"><a class="nav-link" href="{{ url('patient') }}"><i class="fa fa-users"></i> <span>Patient</span></a></li>
      <li class="{{ Request::route()->getName() == 'study' ? ' active' : '' }}"><a class="nav-link" href="{{ url('patient') }}"><i class="fa fa-columns"></i> <span>Study</span></a></li>
    </ul>
</aside>
