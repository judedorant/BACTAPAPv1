<!-- login form -->
  <form id="quickForm">
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <p>One fine body&hellip;</p> -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group mb-0">
            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signModal">Sign up</a>
          </div>
          <div class="form-group mb-0">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
              <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
        
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- <div class="card-footer"> -->
          <!-- <button type="submit" class="btn btn-success">Submit</button> -->
          <button type="submit" class="btn btn-primary">Submit</button>
        <!-- </div> -->
          </div>
        </div>
      <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </form>