@extends('client.dashboard')

@section('clientindex')


<!-- Main content -->
  <section class="content-header" style="margin-left: 20px; margin-right: 20px;">
    <div class="col-md-12">
      <button class="btn btn-default btn-block" data-toggle="modal" data-target="#modal-post">Post</button>
      @include('modal.post')
    </div>
  </section>
  <section class="content" style="margin-left: 20px; margin-right: 20px">
    <div class="col-md-12">
      @include('client.content.newsfeed', compact('data', 'profileData'))
    </div>
  </section>

  <script type="text/javascript">
    // getnewsFeed();
    // // padayunan ni for 
    //  function getnewsFeed() {
    //     $.ajax({
    //         url: "{{ route('newsfeed') }}",
    //         type: 'GET',
    //         success: function (response) {
    //           console.log(response.data);



    //         },
    //         error: function (response) {
    //             console.log('Error:', response);
    //         }
    //     });
    // }
  </script>

@endsection