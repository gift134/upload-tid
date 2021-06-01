<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <div class="user-panel" style="height:60px;">
            {{-- <div class="pull-left image">
                <img src="{{asset('resources/assets/dist/img/icon.jpg')}}" class="img-circle" alt="User Image">
            </div> --}}
            <div class="pull-left info">
                <p>Administrator</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="{{ Request::is( 'admin/dashboard') ? 'active' : '' }}">
          <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-bar-chart"></i><span>Dashboard</span></a>
        </li>
        <li class="treeview {{ Request::is( 'admin/change-password') ? 'active' : '' }}">
            <a href="#">
                <i class="fa fa-gears"></i>
                <span>Account</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: {{ Request::is( 'admin/change-password') ? 'block' : 'none' }};">
                  <li class="{{ Request::is( 'admin/change-password') ? 'active' : '' }}">
                    <a href="{{ url('admin/change-password') }}"><i class="fa fa-bars"></i><span>Change Password</span></a>
                  </li>
            </ul>
        </li>
        
        <li class="{{ Request::is( 'admin/siteconfig') ? 'active' : '' }}">
            <a href="{{ url('admin/siteconfig') }}">
                <i class="fa fa-toggle-on"></i>
                <span>Site Configuration</span>
            </a>
        </li>


        <li class="{{ Request::is( 'admin/cms') || Request::is( 'admin/cms/*/edit') ? 'active' : '' }}">
            <a href="{{ url('admin/cms') }}">
                <i class="fa fa-database"></i>
                <span>CMS</span>
            </a>
        </li>


        <li class="{{ Request::is( 'admin/seo') || Request::is( 'admin/seo/create')  || Request::is( 'admin/seo/*/edit')  ? 'active' : '' }}">
            <a href="{{ url('admin/seo') }}">
                <i class="fa fa-database"></i>
                <span>SEO</span>
            </a>
        </li>

        

        <li class="treeview {{ Request::is( 'admin/category') || Request::is( 'admin/category/create') || Request::is( 'admin/category/*/edit') || Request::is( 'admin/tag') || Request::is( 'admin/tag/create') || Request::is( 'admin/tag/*/edit') || Request::is( 'admin/post')|| Request::is( 'admin/post/create') || Request::is( 'admin/post/*/edit') ? 'active' : '' }}">
            <a href="#">
                <i class="fa fa-tags"></i>
                <span>Blog</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: {{ Request::is( 'admin/category') || Request::is( 'admin/category/create') || Request::is( 'admin/category/*/edit') || Request::is( 'admin/tag') || Request::is( 'admin/tag/create') || Request::is( 'admin/tag/*/edit') || Request::is( 'admin/post')|| Request::is( 'admin/post/create') || Request::is( 'admin/post/*/edit') ? 'block' : 'none' }};">
                  <li class="{{ Request::is( 'admin/category') || Request::is( 'admin/category/create') || Request::is( 'admin/category/*/edit')  ? 'active' : '' }}">
                    <a href="{{ url('admin/category') }}"><i class="fa fa-bars"></i><span>Category</span></a>
                  </li>
                  <li class="{{ Request::is( 'admin/tag') || Request::is( 'admin/tag/create') || Request::is( 'admin/tag/*/edit') ? 'active' : '' }}">
                    <a href="{{ url('admin/tag') }}"><i class="fa fa-bars"></i><span>Tag</span></a>
                  </li>
                  <li class="{{ Request::is( 'admin/post') || Request::is( 'admin/post/create') || Request::is( 'admin/post/*/edit') ? 'active' : '' }}">
                    <a href="{{ url('admin/post') }}"><i class="fa fa-bars"></i><span>Post</span></a>
                  </li>
            </ul>
        </li>
         
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>