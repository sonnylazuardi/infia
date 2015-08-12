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

    <script class="include" type="text/javascript" src="{{asset('admin/gum/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('admin/gum/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('admin/gum/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('admin/gum/js/jquery.sparkline.js')}}"></script>

    <script src="{{asset('admin/gum/js/common-scripts.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    @yield('script')


</body>

</html>
