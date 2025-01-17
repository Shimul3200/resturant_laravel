<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> --}}
        <!-- /.search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
                {{-- <ul class="treeview-menu">
                    <li class="active"><a href="/"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                </ul> --}}
            </li>
 

            {{--Start Education--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                       </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/gallery')}}"><i class="fa fa-circle-o"></i>Gallery List</a></li>
                </ul>
            </li>
            {{--End Education--}}
            {{--Start Experience--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Item</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                       </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/item')}}"><i class="fa fa-circle-o"></i>Item List</a></li>
                </ul>
            </li>
            {{--End Experience--}}




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
