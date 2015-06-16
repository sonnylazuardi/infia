<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Infia Dashboard</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{url('/auth/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{url('/admin/news')}}" class="active"><i class="fa fa-newspaper-o fa-fw"></i> News</a>
                </li>
                <li>
                    <a href="{{url('/admin/portfolio')}}" class="active"><i class="fa fa-mobile fa-fw"></i> Portfolio</a>
                </li>
                <li>
                    <a href="{{url('/admin/project')}}" class="active"><i class="fa fa-suitcase fa-fw"></i> Project</a>
                </li>
                <li>
                    <a href="{{url('/admin/page')}}" class="active"><i class="fa fa-archive fa-fw"></i> Page</a>
                </li>
                <li>
                    <a href="{{url('/admin/contact')}}"><i class="fa fa-envelope fa-fw"></i> Contact</a>
                </li>
                <li>
                    <a href="{{url('/admin/user')}}"><i class="fa fa-user fa-fw"></i> Users</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>