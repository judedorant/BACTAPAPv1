<!-- Box Comment -->
@foreach ($data as $item)
<div class="card card-widget">
    <div class="card-header">
      <div class="user-block">
        <img class="img-circle" src="{{ url('storage/pp/'.$item->photo) }}" alt="User Image">
        <span class="username"><a href="#">{{ $item->first_name . " " . $item->last_name }}</a></span>
        <span class="description">Shared publicly - {{ $item->post_created_at }}</span>
      </div>
      <!-- /.user-block -->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" title="Mark as read">
          <i class="far fa-circle"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <img class="img-fluid pad" src="{{  url('storage/pp/'.$item->picture_photo) }}" alt="Photo">

      <p>I took this photo this morning. What do you guys think?</p>
      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
      <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
      <span class="float-right text-muted">127 likes - 3 comments</span>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer -->
    <div class="card-footer">
      <form action="#" method="post">
        <img class="img-fluid img-circle img-sm" src="{{
                      (!empty($profileData->photo)) ? url('storage/pp/'.$profileData->photo) : url('ppElse.jpg')
                     }}" alt="Alt Text">
        <!-- .img-push is used to add margin to elements next to floating images -->
        <div class="img-push">
          <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
        </div>
      </form>
    </div>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
@endforeach
