<!-- Navigation -->

<header class="header black-bg">
  <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
<a href="#" class="logo"><b>Infia Dashboard</b></a>
<div class="nav notify-row" id="top_menu">
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-tasks"></i>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                    <p class="green">Hello</p>
                </li>
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                <li><a href="{{url('/auth/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </li>
            </ul>
        </li>
    </ul>
</div>
</header>

    <aside>
        <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
              
                <p class="centered"><img src="{{asset('img/logo-small.png')}}" class="img-circle" width="60"></a></p>
                <h5 class="centered">{{{ Auth::user()->name }}}</h5>
                <h6 class="centered">{{{ Auth::user()->email }}}</h6>
                    
                <li>
                    {!!Form::link_menu('admin/about', '<i class="fa fa-question-circle fa-fw"></i> About')!!}
                </li>
                <li>
                    {!!Form::link_menu('admin/kanal', '<i class="fa fa-lemon-o fa-fw"></i> Kanal')!!}
                </li>
                <li>
                    {!!Form::link_menu('admin/news', '<i class="fa fa-newspaper-o fa-fw"></i> News')!!}
                </li>
                <li>
                    {!!Form::link_menu('admin/contact', '<i class="fa fa-envelope fa-fw"></i> Contact')!!}
                </li>
                <li>
                    {!!Form::link_menu('admin/user', '<i class="fa fa-user fa-fw"></i> Users')!!}
                </li>

            </ul>
              <!-- sidebar menu end-->
        </div>
  </aside>