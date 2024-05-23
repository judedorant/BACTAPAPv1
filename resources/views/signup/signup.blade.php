
@include('template.header')

<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Timelime example  -->
        <!-- <div class="row"> -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sign up</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">first name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">last name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                   </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        <!-- </div> -->
      </div>
      <!-- /.timeline -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{!! url('AdminLTE-3.1.0/plugins/jquery/jquery.min.js') !!}"></script>

<!-- Bootstrap 4 -->
<script src="{!! url('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<!-- AdminLTE App -->
<script src="{!! url('AdminLTE-3.1.0/dist/js/adminlte.min.js') !!}"></script>


<script src="{!! url('AdminLTE-3.1.0/plugins/jquery-validation/jquery.validate.min.js') !!}"></script>


<!-- AdminLTE for demo purposes -->
<!-- <script src="{!! url('AdminLTE-3.1.0/dist/js/demo.js') !!}"></script> -->



<!-- modals ?or toist -->

<!-- <script src="{!! url('AdminLTE-3.1.0/plugins/jquery/jquery.min.js') !!}"></script> -->

<!-- Bootstrap 4 -->
<!-- <script src="{!! url('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> -->

<!-- SweetAlert2 -->
<script src="{!! url('AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.js') !!}"></script>

<!-- Toastr -->
<script src="{!! url('AdminLTE-3.1.0/plugins/toastr/toastr.min.js') !!}"></script>

<!-- AdminLTE App -->
<!-- <script src="{!! url('dist/js/adminlte.min.js') !!}"></script> -->

<!-- AdminLTE for demo purposes -->
<!-- <script src="{!! url('dist/js/demo.js') !!}"></script> -->
<script src="{{ asset('js/signup.js') }}"></script>
<!-- <script src=""></script> -->

<script type="text/javascript">
//   $(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       // this is for submit
//       // alert( "Form successful submitted!" );
      
//     }
//   });
//   $('#quickForm').validate({
//     rules: {
//       email: {
//         required: true,
//         email: false,
//       },
//       password: {
//         required: true,
//         minlength: 5
//       },
//       terms: {
//         required: true
//       },
//     },
//     messages: {
//       email: {
//         required: "Please enter a email address",
//         email: "Please enter a vaild email address"
//       },
//       password: {
//         required: "Please provide a password",
//         minlength: "Your password must be at least 5 characters long"
//       },
//       terms: "Please accept our terms"
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     }
//   });
// });
</script>
</body>
</html>
