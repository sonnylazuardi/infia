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

      @include('kanal.nav')
      
      @include('nav')
      
      <!-- /#sidebar-wrapper -->

      @yield('content')

    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('js/vendor.js')}}"></script>

    @yield('script')

    @include('kanal.script')
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66256007-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>