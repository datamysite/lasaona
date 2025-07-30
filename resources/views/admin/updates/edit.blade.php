<form id="edit_blog_form" action="{{route('admin.updates.update')}}">
  @csrf
  <input type="hidden" name="blog_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Update</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-5">
        <div class="edit-mblog-image-wrapper edit-mblog-image-wrapper-updates file-set" style="background-image: url({{URL::to('/public/storage/updates/'.$data->banner)}});">
          <input type="file" name="edit_mblog_image" accept="image/*" />
          <div class="close-btn">×</div>
        </div>
      </div>
      <div class="col-md-7">
        <br><br>
        <div class="form-group">
          <label>Title</label>
          <textarea class="form-control" name="heading" rows="3" required>{{$data->heading}}</textarea>
        </div>

        <div class="form-group">
          <label>Link:</label>
          <input type="text" class="form-control" name="link" required value="{{$data->link}}">
        </div>
      </div>
    </div>

  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>