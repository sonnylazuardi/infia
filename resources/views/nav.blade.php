<!-- Sidebar -->
<div id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand logo-head">
      <a href="#">
        <div class="logo"></div>
      </a>
    </li>
    {!! Form::list_menu('home', '<i class="demo-icon">&#xe802;</i> About') !!}
    {!! Form::list_menu('kanal', '<i class="demo-icon">&#xe804;</i> Kanal') !!}
    {!! Form::list_menu('news', '<i class="demo-icon">&#xe803;</i> News') !!}
    {!! Form::list_menu('news/layout2', '<i class="demo-icon">&#xe803;</i> News 2') !!}
    {!! Form::list_menu('home/contact', '<i class="fa fa-phone"></i> Contact us') !!}
  </ul>
  <div class="maskot" style="background:url('{{asset(@App\Setting::where('key', 'home_maskot')->first()->value)}}') no-repeat; width: 100%; height: 200px; background-size: contain; position: absolute; bottom: 0">
    
  </div>
</div>