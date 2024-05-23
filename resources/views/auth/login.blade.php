
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bacolod tattoo's</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! url('AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css') !!}">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{!! url('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">

  <!-- Theme style -->

  <link rel="stylesheet" href="{!! url('AdminLTE-3.1.0/dist/css/adminlte.min.css') !!}">
</head>
<style type="text/css">
  .login-page{
     background-image: url("bacccc.jpg");
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
  }
  .card{
   /* background-color: rgb(0,0,0)!important; /* Fallback color */
/*  background-color: rgba(0,0,0, 0.4)!important; /* Black w/opacity/see-through */*/*/
  }
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- logo here -->
  <!-- <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Bacolod Tattoo's </p>

      <form method="post" id="loginsubmit">
        @csrf
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Email" name="email" required autofocus autocomplete="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <form method="post" id="Registersubmit" style="display: none;" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <!-- <input class="form-control" placeholder="First name" name="fname" required autofocus autocomplete="first name"> -->
          <input class="form-control" placeholder="First name" name="fname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input class="form-control" placeholder="Last name" name="lname" required autofocus autocomplete="last name"> -->
          <input class="form-control" placeholder="Last name" name="lname" >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Username" name="username" >
          <!-- <input class="form-control" placeholder="Username" name="username" required autofocus autocomplete="Username"> -->

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email " name="email" >
          <!-- <input type="email" class="form-control" placeholder="Email " name="email" required autofocus autocomplete="email"> -->

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input class="form-control" placeholder="Username" name="contact_number" required autofocus autocomplete="Contact Number"> -->
          <input class="form-control" placeholder="Contact Number" name="contact_number" >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input type="password" class="form-control" placeholder="Password" id="registerpassword" name="password" required autocomplete="current-password" > -->
          <input type="password" class="form-control" placeholder="Password" id="registerpassword" name="password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- <input type="password" class="form-control" placeholder="Confirm-Password" id="cpassword" name="cpassword" required autocomplete="Re-Password" > -->
          <input type="password" class="form-control" placeholder="Confirm-Password" id="cpassword" name="cpassword">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="artist">
            <!-- <option style="display: none;">Gender</option> -->
            <option value="client">Client</option>
            <option value="artist">Artist</option>
          </select>
        </div>

      
        <div class="input-group mb-3">
          <input type="file" id="profilePic" name="profilePic" >
          <!-- <input type="file" id="cpassword" name="profilePic" required autocomplete="profile Picture" > -->

          <!-- div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3"> -->
        <!-- <p>- OR -</p> -->
       <!--  <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a> -->
        <!-- <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center" id="register">Register a new membership</a>
        <!-- <button onclick="myFunction()">Click me</button> -->
        <a href="#" class="text-center" id="login" style="display: none">back login</a>

      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{!! url('AdminLTE-3.1.0/plugins/jquery/jquery.min.js') !!}"></script>

<!-- Bootstrap 4 -->
<script src="{!! url('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<!-- AdminLTE App -->
<script src="{!! url('AdminLTE-3.1.0/dist/js/adminlte.min.js') !!}"></script>
</body>
<script type="text/javascript">

  function validateConfirmpassword(password, Cpassword){
      return password == Cpassword ? true : false;
  }
  
  $('#loginsubmit').submit(function(e){
    e.preventDefault();
    
    // if(validateConfirmpassword($('#password').value, $('#Cpassword').value) == true){
    var formData = $('#loginsubmit').serialize();

    $.ajax({
      type: 'POST',
        url: "{{ route('login') }}", // Embedding route URL.
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          
            // resolve(response); // Resolve the promise with the response data
            // console.log(response.data);
          // alert('Welcome Please complete your profile : ' + response.data);

        // window.location.href = "profileSetup/" + response.id;
          console.log(response.data);
          window.location.href=response.data;

        },
        error: function(xhr, status, error) {
          console.log(xhr + " " + status + " " + error );
            // reject(error); // Reject the promise with the error message
        }
    });
  });

  $('#Registersubmit').submit(function(e){
    // action=""
    e.preventDefault();
    
    if(validateConfirmpassword($('#registerpassword').val(), $('#cpassword').val()) == true)
    {
      var formData = $('#Registersubmit').serialize();
    
      $.ajax({
        type: 'POST',
        url: "{{ route('register') }}", // Embedding route URL.
        // data: formData,
        data: new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          console.log(response.msg + " " + response.data);
          window.location.href="http://bactapapv1.test/client";
          // client

        },
        error: function(xhr, status, error) {
          console.log("error");
            // reject(error); // Reject the promise with the error message
        }
      });
    }else{

      alert("password dont match");
    }
  });


  document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('login');
    const registerBtn = document.getElementById('register');
    const loginForm = document.getElementById('loginsubmit');
    const registerForm = document.getElementById('Registersubmit');

    loginBtn.addEventListener('click', () => {
      loginBtn.style.display = "none";
      registerBtn.style.display = "block";

      loginForm.style.display = "block";
      registerForm.style.display = "none";

      registerForm.classList.add('hidden');
    });

    registerBtn.addEventListener('click', () => {
      registerBtn.style.display = "none";
      loginBtn.style.display = "block";

      loginForm.style.display = "none";
      registerForm.style.display = "block";
    });
  });



</script>
</html>
