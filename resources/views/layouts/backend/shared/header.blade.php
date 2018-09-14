<header class="main-header">

  <!-- Logo -->
  <a href="{{ url('/backend')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>I</b>T</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Intertec</b></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      @if(Auth::user())
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                  {{ csrf_field() }}
                  <button class="btn btn-default btn-flat">Sign out</button>
                </form>

              </div>
            </li>
          </ul>
        </li>
      </ul>
      @endif
    </div>

  </nav>
</header>
