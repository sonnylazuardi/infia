<!-- Sidebar -->
<div id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand logo-head">
      <a href="#">
        <div class="logo"></div>
      </a>
    </li>
    {!! Form::list_menu('home/index', '<i class="demo-icon">&#xe802;</i> About') !!}
    {!! Form::list_menu('kanal/index', '<i class="demo-icon">&#xe804;</i> Kanal') !!}
    {!! Form::list_menu('news/index', '<i class="demo-icon">&#xe803;</i> News') !!}
    {!! Form::list_menu('home/contact', '<i class="fa fa-phone"></i> Contact us') !!}
  </ul>
  <div class="maskot" style="background:url('{{asset(@App\Setting::where('key', 'home_maskot')->first()->value)}}') no-repeat; background-size: contain; background-position: center; position: absolute; bottom: 0; z-index: -1">
    
  </div>
</div>