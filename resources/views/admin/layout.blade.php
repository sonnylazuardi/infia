@include ('admin.header')
  
<section id="container" >

    @include('admin.nav')
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>

</section>

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
