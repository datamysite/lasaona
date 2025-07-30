<form id="edit_blog_form" action="{{route('admin.videos.update')}}">
  @csrf
  <input type="hidden" name="video_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Video</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <div class="row">
      <div class="col-md-7">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" value="{{$data->name}}" name="name" required>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label>Playlist</label>
          <select class="form-control" name="playlist_id" required>
            <option value="">Select</option>
            @foreach ($data->playlists as $val)
            <option value="{{ $val->id }}" {{$val->id == $data->playlist_id ? 'selected' : ''}}>{{ $val->title }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Ifram src</label>
          <input type="text" class="form-control" value="{{$data->iframe}}" name="iframe" required>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>