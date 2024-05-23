
@include('admin.template.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.template.nav')
@include('admin.template.sidebar')
  <!-- Content Wrapper. Contains page content -->


  <div class="content-wrapper">
    <!-- compact('data', '') -->
    @yield('admin')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{!! url('AdminLTE-3.1.0/plugins/jquery/jquery.min.js') !!}"></script>

<!-- Bootstrap 4 -->
<script src="{!! url('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! url('AdminLTE-3.1.0/dist/js/adminlte.min.js') !!}"></script>



<script src="{!! url('AdminLTE-3.1.0/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>


<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>



<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/jszip/jszip.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/pdfmake/pdfmake.min.js') !!}"></script>
<script src="{!! url('AdminLTE-3.1.0/plugins/pdfmake/vfs_fonts.js') !!}"></script>
<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.html5.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.print.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js') !!}"></script>

<script src="{!! url('AdminLTE-3.1.0/dist/js/demo.js') !!}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>


