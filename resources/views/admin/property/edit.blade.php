<form id="edit_property_form" action="{{route('admin.property.update')}}">
  @csrf
  <input type="hidden" name="property_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Property</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Property Name</label>
          <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Builder Name</label>
          <input type="text" class="form-control" name="builder_name" value="{{$data->builder_name}}" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group slug-field">
          <label>Slug</label>
          <div class="form-control">
            <span>{{URL::to('/')}}/real-estate/</span>
            <input type="text" class="blogSlug" name="slug" value="{{$data->slug}}" required>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Property Map</label>
          <textarea class="form-control" name="property_map" rows="3">{{$data->property_map}}</textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" id="content3" rows="3">{{$data->description}}</textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Property Features</label>
          <textarea class="form-control" name="property_features" id="content4" rows="3">{{$data->property_features}}</textarea>
        </div>
      </div>
    </div>

  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>