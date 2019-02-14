<html lang="{{ app()->getLocale() }}">
    @include('layouts.admin.header')
    <body class="fix-header">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <div id="wrapper">
            @include('layouts.admin.menu')
            @yield('content')
        </div>    
   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('ampleadmin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{URL::asset('ampleadmin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('ampleadmin/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- chartist chart -->
    <!-- <script src="{{URL::asset('ampleadmin/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script> -->
    <!-- <script src="{{URL::asset('ampleadmin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script> -->
    <!-- Calendar JavaScript -->
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/moment/moment.js')}}"></script>
    <!-- <script src="{{URL::asset('ampleadmin/plugins/bower_components/calendar/dist/fullcalendar.min.js')}}"></script> -->
    <!-- <script src="{{URL::asset('ampleadmin/plugins/bower_components/calendar/dist/cal-init.js')}}"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('ampleadmin/js/custom.js')}}"></script>
    
    <!-- Data Table --> 
    
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

    <!-- Custom tab JavaScript -->
    <script src="{{URL::asset('ampleadmin/js/cbpFWTabs.js')}}"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    
    <!-- Highchart -->
    <script src="{{URL::asset('js/highchart/highcharts.js')}}"></script>

    <!-- Select2 -->
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('ampleadmin/plugins/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{URL::asset('ampleadmin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{URL::asset('ampleadmin/plugins/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <!-- <script src="{{URL::asset('js/axios/dist/axios.min.js')}}"></script> -->
    
    @yield('script')
     
    <script>
      (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>
   

            
    </body>

</html>