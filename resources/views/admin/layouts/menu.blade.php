

<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
            <a href="{{url('/contact')}}" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <?php 
                $s=App\Contact_us::all();
                ?>
          <span class="label label-success">  {{ $s->count()}} </span>
            </a>
           
        </li>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{url('desing/adminpenel')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">{{admin()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{url('desing/adminpenel')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                        {{admin()->user()->name}}
                        <small>متصل </small>
                    </p>
                </li>
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{url('/')}}" class="btn btn-default btn-flat"> الانتقال الى الموقع </a>
                    </div>

                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{aurl('admin/'.admin()->user()->id.'/edit')}}" class="btn btn-default btn-flat">الصفحة الشحصية</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{aurl('logout')}}" class="btn btn-default btn-flat">تسجيل خروج </a>
                    </div>
                </li>
            </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

        <!-- language choose  -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="fa fa-globe"></i>
            </a>
            <ul class="dropdown-menu">
                <li> <a href="{{aurl('lang/ar')}}" ><i class="fa fa-flag"></i> عربي </a></li>
                <li> <a href="{{aurl('lang/en')}}" ><i class="fa fa-flag"></i>English</a></li>
            </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

    </ul>
</div>