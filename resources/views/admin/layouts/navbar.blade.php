


<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>NARD </b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>رفقاء </b>وطن</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

      @include('admin.layouts.menu')
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('desing/adminpenel')}}/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{admin()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"> </li>
            <li class="{{active_menu('home')[0]}}">
                <a href="{{aurl('home')}}">
                    <i class="fa fa-home"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="treeview {{active_menu('post')[0]}}">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>إدارة المنشورات </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{aurl('postNews')}}"><i class="fa fa-circle-o"></i> منشورات الاخبار </a></li>
                    <li><a href="{{aurl('postVideo')}}"><i class="fa fa-circle-o"></i> منشورات الفيديو </a></li>

                </ul>
            </li>

                <li class="{{active_menu('service')[0]}} ">
                    <a href="{{aurl('service')}}">
                        <i class="fa fa-cubes"></i>
                        <span>  إدارة خدماتنا</span>

                    </a></li>
            <li class="{{active_menu('admin')[0]}} ">
                    <a href="{{aurl('admin')}}">
                        <i class="fa fa-gears"></i>
                        <span>  إدارة المشرفين</span>
                    </a></li>

                <li class="{{active_menu('setting')[0]}} ">
                    <a href="{{aurl('setting')}}">
                        <i class="fa  fa-cog"></i>
                        <span>  إعدادات الموقع</span>

                    </a></li>

            <li class="{{active_menu('contact')[0]}} ">
                <a href="{{aurl('contact')}}"><i class="fa fa-envelope-o"></i>
                    <span>الرسائل </span></a></li>

                <li {{-- class="{{active_menu('admin/home_site')[0]}}" --}}>
                <a href="{{url('admin/home_site')}}">
                    <i class="fa fa-home"></i>
                    <span>الموقع</span>
                </a>
            </li>

        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
