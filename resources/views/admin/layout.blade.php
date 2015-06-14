@include ('admin.header')
  
<div id="wrapper">

  @include('admin.nav')

  <div id="page-wrapper">

    @yield('content')

  </div>

</div>

    <!-- jQuery -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    @yield('script')
    

</body>

</html>
