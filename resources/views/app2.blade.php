<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Infia</title>
    <meta name="Description" content="Infia - Dagelan Website" />
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

    <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
  </head>
  <body>
    
    <div id="wrapper">
      
      @include('nav')
      
      <!-- /#sidebar-wrapper -->

      @yield('content')

    </div>

    @yield('script')

  </body>
</html>