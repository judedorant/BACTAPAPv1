<!-- login form -->
  <!-- <form id="qweqwe"> -->
<form id="upload_form" enctype="multipart/form-data">
  @csrf
<div class="modal fade show" id="modal-post">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div class="form-group">
            <textarea id="compose-textarea" name="details" class="form-control" style="height: 200px">Write here!</textarea>
          </div>
          <!-- <div class="form-group">
            <input type="file" name="images[]" id="images" multiple class="custom-file-input">
          </div> -->
          <div class="form-group">
            <div class="custom-file">
              <!-- <input type="file" class="custom-file-input" id="customFile"> -->
              <input type="file" name="images[]" id="images" multiple class="custom-file-input">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        <!--   <div class="form-group">
            <button type="submit" class="btn btn-success">Upload</button>
          </div> -->
          <!-- </form> -->
          <div class="progress" style=" display: none;margin-top: 10px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;"></div>
          </div>
          <div id="preview" class="d-flex flex-wrap"></div>
          <div id="success" class="text-success mt-3"></div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    let countCLick = 0;
    $('#compose-textarea').click(function (){
      if(countCLick == 0){
        this.value = "";
      }
      countCLick++;
      // console.log(countCLick);
    });
    $('#images').on('change', function () {
      $('#preview').html('');
      var files = $(this)[0].files;
      if (files.length > 0) {
          for (var i = 0; i < files.length; i++) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#preview').append('<img src="' + e.target.result + '">');
              };
              reader.readAsDataURL(files[i]);
          }
      }
    });
            

    $('#upload_form').on('submit', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $('.progress').show();
        $('.progress-bar').css('width', '0%');


// $.ajax({
//         type: 'POST',
//         url: "{{ route('register') }}", // Embedding route URL.
//         // data: formData,
//         data: new FormData(this),
//         dataType:'JSON',
//         contentType: false,
//         cache: false,
//         processData: false,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function(response) {
//           console.log(response.msg + " " + response.data);
//           window.location.href="http://bactapapv1.test/client";
//           // client

//         },
//         error: function(xhr, status, error) {
//           console.log("error");
//             // reject(error); // Reject the promise with the error message
//         }
//       });


        $.ajax({
          url: "{{ route('postupload') }}",
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          header: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function (evt) {
              if (evt.lengthComputable) {
                  var percentComplete = evt.loaded / evt.total * 100;
                  $('.progress-bar').css('width', percentComplete + '%');
              }
            }, false);
            return xhr;
          },
          success: function (data) {
            console.log(data.data);
            $('#success').html(data.success);
            $('#upload_form')[0].reset();
            $('#preview').html('');
            $('.progress').hide();
            $('#modal-post').modal('hide');
          },
          error: function (xhr) {
            let errors = xhr.responseJSON.errors;
            $('#success').html('');
            for (let error in errors) {
                $('#success').append('<div>' + errors[error][0] + '</div>');
            }
            $('.progress').hide();
          }
        });
    });

  </script>