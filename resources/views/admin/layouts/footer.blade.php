
<footer>
    <section>
        <div class="rights">
            <div class="container">
                <p class="pull-right">جميع الحقوق محفوظة -  رفقاء وطن  2019 </p>
                <hr class="visible-xs">
                <div class="pull-left">
                    <!-- <p class="pull-left">تصميم و تطوير<a href="tel:+967 772544010" type="gmail" onfocus="+96772249338"> </a> </p> -->

                </div>

                <div class="clearfix"></div>
            </div>
        </div></section>

</footer>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/jquery-ui/jquery-ui.min.js"></script>


<!-- DataTables -->
<link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="{{url('/')}}/desing/adminpenel/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/desing/adminpenel/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/desing/adminpenel/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>

<script src="{{url('')}}/vendor/datatables/buttons.server-side.js"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);


</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/raphael/raphael.min.js"></script>
<script src="{{url('/')}}/desing/adminpenel/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{url('/')}}/desing/adminpenel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('/')}}/desing/adminpenel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/moment/min/moment.min.js"></script>
<script src="{{url('/')}}/desing/adminpenel/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/')}}/desing/adminpenel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('/')}}/desing/adminpenel/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/desing/adminpenel/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/')}}/desing/adminpenel/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/desing/adminpenel/dist/js/demo.js"></script>
<script src="{{url('/')}}/desing/adminpenel/dist/js/myfunction.js"></script>
@yield('footer')

@stack('js')
@stack('css')
</body>
</html>
