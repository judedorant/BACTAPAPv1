<!-- signup form -->
<form id="signupform" method="post" >
       @csrf
    <div class="modal fade" id="signModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">first name</label>
                                    <!-- <input type="text" name="fname" class="form-control" id="" placeholder="firt name"> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">last name</label>
                                    <!-- <input type="text" name="lname" class="form-control" id="" placeholder="last name"> -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">username</label>
                                    <!-- <input type="text" name="username" class="form-control" id="" placeholder="username"> -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">confirm Password</label>
                                    <input type="password" name="Cpassword" class="form-control" id="Cpassword" placeholder="re-enter password">
                                </div>
                            </div>
                            <div class="line"></div>
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">address</label>
                                    <input type="text" name="password" class="form-control" id="" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">province</label>
                                    <input type="text" name="password" class="form-control" id="" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">city</label>
                                    <input type="text" name="password" class="form-control" id="" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">zip code</label>
                                    <input type="text" name="password" class="form-control" id="" placeholder="Enter email">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>


