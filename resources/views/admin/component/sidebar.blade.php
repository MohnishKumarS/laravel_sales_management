<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dashboard/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Auth::user()->name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @php
                $isSalesActive = Request::is('admin/sales-create', 'admin/salesperproduct', 'admin/salesperperson');
            @endphp
            {{-- <li class="treeview {{ $isSalesActive ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-bookmark"></i> <span>Sales</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class={{ Request::is('admin/sales-create') ? 'active' : '' }}><a href="{{ url('admin/sales-create') }}"><i class="fa fa-angle-double-right"></i> Create
                            sale</a></li>
                    <li class={{ Request::is('admin/salesperproduct') ? 'active' : '' }}><a href="{{ url('admin/salesperproduct') }}"><i class="fa fa-angle-double-right"></i> Average
                            product</a></li>
                    <li class={{ Request::is('admin/salesperperson') ? 'active' : '' }}><a href="{{ url('admin/salesperperson') }}"><i class="fa fa-angle-double-right"></i> Sales
                            Person</a></li>
                </ul>
            </li> --}}
            <li class={{ Request::is('admin/sales-create') ? 'active' : '' }}>
                <a href="{{ route('admin.sales.create') }}">
                    <i class="fa fa-plus"></i> <span>Create Sale</span>
                    {{-- <small class="badge pull-right bg-red">3</small> --}}
                </a>
            </li>
            <li class={{ Request::is('admin/sales-list') ? 'active' : '' }}>
                <a href="{{ route('admin.sales.list') }}">
                    <i class="fa fa-calendar"></i> <span>Sales List</span>
                    {{-- <small class="badge pull-right bg-red">3</small> --}}
                </a>
            </li>
            <li class={{ Request::is('admin/users-list') ? 'active' : '' }}>
                <a href="{{ route('admin.users.list') }}">
                    <i class="fa fa-user"></i> <span>Users List</span>
                    {{-- <small class="badge pull-right bg-red">3</small> --}}
                </a>
            </li>
            <li class={{ Request::is('admin/pdf-generate') ? 'active' : '' }}>
                <a href="{{ route('admin.pdf.generate') }}">
                    <i class="fa fa-file"></i> <span>PDF generate</span>
                </a>
            </li>
            <li class={{ Request::is('admin/sales-graph') ? 'active' : '' }}>
                <a href="{{ route('admin.graph') }}">
                    <i class="fa fa-signal"></i> <span>Graph View</span>
                </a>
            </li>
            <li class={{ Request::is('admin/salesperproduct') ? 'active' : '' }}>
                <a href="{{ url('admin/salesperproduct') }}">
                    <i class="fa fa-bell"></i> <span>Average product</span>
                </a>
            </li>
            <li class={{ Request::is('admin/salesperperson') ? 'active' : '' }}>
                <a href="{{ url('admin/salesperperson') }}">
                    <i class="fa fa-users"></i> <span>Sales Person</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            {{-- <li class="treeview">
              <a href="#">
                  <i class="fa fa-folder"></i> <span>Examples</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                  <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                  <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                  <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                  <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                  <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                  <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
              </ul>
          </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
