<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    @if(Auth::user())
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('/backend')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="{{ route('product.index' )}}"><i class="fa fa-circle-o"></i> All Product
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('brands.index', 'home-router')}}"><i class="fa fa-circle-o"></i> Home Router</a></li>
                <li><a href="{{ route('brands.index', 'mobile-wifi')}}"><i class="fa fa-circle-o"></i> Mobile Wifi</a></li>
                <li><a href="{{ route('brands.index', 'power-bank')}}"><i class="fa fa-circle-o"></i> Power Bank</a></li>
                <li><a href="{{ route('brands.index', 'computer-accesories')}}"><i class="fa fa-circle-o"></i> Computer Accessories</a></li>
                <li><a href="{{ route('brands.index', 'camera')}}"><i class="fa fa-circle-o"></i> Camera</a></li>
                <li><a href="{{ route('brands.index', 'unified-communication')}}"><i class="fa fa-circle-o"></i> Unified Communication</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="{{ route('aboutus.index' )}}">
            <i class="fa fa-envelope"></i> <span>About Us</span>
          </a>
        </li>
        <li>
          <a href="{{ route('backend.enterprise.index') }}">
            <i class="fa fa-envelope"></i> <span>Enterprise</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Contacts</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('backend.news.categories.index') }}"><i class="fa fa-circle-o"></i> Category News</a></li>
            <li><a href="{{ route('backend.news.index') }}"><i class="fa fa-circle-o"></i> All News</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('customers.index')}}">
            <i class="fa fa-users"></i> <span>Customers</span>
          </a>
        </li>
        <li>
          <a href="{{ route('backend.slider.index')}}">
            <i class="fa fa-image"></i> <span>Sliders</span>
          </a>
        </li>
        <li>
          <a href="{{ route('backend.enterpriseBox.index')}}">
            <i class="fa fa-image"></i> <span>Enterprise Box</span>
          </a>
        </li>
      </ul>
    @endif
  </section>
  <!-- /.sidebar -->
</aside>
