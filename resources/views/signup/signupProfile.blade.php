@include('../template.header')
<body class="hold-transition register-page">
<div class="register-box" style="width: 1000px">
  <div class="register-logo">
    <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
  </div>
  <div class="card" >
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form method="post" id="formprofilesign">
       @csrf

        <input type="" name="id" value="{{ $user->id }}" style="display: none;">
        <div class="row">
          <div class="col-6">
            <div class="input-group mb-3">
              <input type="text" value="{{ $user->first_name }}" name="fname" class="form-control" placeholder="first name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="input-group mb-3">
              <input type="text" value="{{ $user->last_name }}" name="lname" class="form-control" placeholder="first name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" value="{{ $user->username }}" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-6">
            <div class="input-group mb-3">
              <input type="text" name="Cnumber" class="form-control" placeholder="Contact Number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="input-group mb-3">
              <input type="email" name="email"class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="nation">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="province">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="city">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="address" class="form-control" placeholder="address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="input-group mb-3">
          <input type="email" name="facebook" class="form-control" placeholder="facebook">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="instagram" class="form-control" placeholder="instagram">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="twitter" class="form-control" placeholder="twitter">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="tiktok">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label>gender</label>
        <input type="checkbox" name="gender" value="true">
        <label>artist</label>
        <input type="checkbox" name="artis" value="true">
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

   <!--    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


@include('../template.script')
<!-- <script src="{{ asset('js/signup.js') }}"></script> -->

<script type="text/javascript" src="{{ asset('js/signupProfile.js') }}"></script>
</body>
</html>
