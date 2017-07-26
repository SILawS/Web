@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ Auth::user()->gavatar() }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <!-- ======================================= -->
          <!-- Clients -->
          @if ( Auth::user()->hasRole('Superadmin') || Auth::user()->hasPermissionTo('Manage Clients') )
            <li class="treeview">
              <a href="#"><i class="fa fa-user-circle-o"></i> <span>Manage Clients</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/client') }}"><i class="fa fa-user-circle-o"></i> <span>Clients</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/testimonial') }}"><i class="fa fa-comment"></i> <span>Testimonials</span></a></li>
              </ul>
            </li>
          @endif
          <!-- ======================================= -->
          <!-- ======================================= -->
          <!-- Exams -->
          @if ( Auth::user()->hasRole('Superadmin') || Auth::user()->hasPermissionTo('Manage Exams') )
            <li class="treeview">
              <a href="#"><i class="fa fa-book"></i> <span>Exams</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/exam') }}"><i class="fa fa-book"></i> <span>Exams</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/program') }}"><i class="fa fa-tasks"></i> <span>Programs</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/event') }}"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/post') }}"><i class="fa fa-file"></i> <span>Posts</span></a></li>
              </ul>
            </li>
          @endif
          <!-- ======================================= -->
          <!-- ======================================= -->
          <!-- Users -->
          @if ( Auth::user()->hasRole('Superadmin') || env('SUPER_ADMIN_SELF', false) || Auth::user()->hasPermissionTo('Manage Users') )
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Manage Users</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
              </ul>
            </li>
          @endif
          <!-- ======================================= -->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
