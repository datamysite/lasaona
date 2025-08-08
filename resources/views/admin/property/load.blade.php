@foreach($data as $key => $val)
<tr>
  <td>{{++$key}}</td>
  <td>
    {{$val->name}}
  </td>
  <td>
    {{$val->builder_name}}
  </td>
  <td class="text-right"><small>{{date('d-M-Y | h:i A', strtotime($val->created_at))}}</small></td>

  <td class="text-right">
    <div class="btn-group">
      <button type="button" class="btn btn-info btn-sm">Action</button>
      <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
        <span class="sr-only">Action</span>
      </button>
      <div class="dropdown-menu dropdown-menu-right table-dropdown" role="menu">

        <a class="dropdown-item editProperty" href="javascript:void(0)" title="Edit Property" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i>Edit</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger deleteProperty" href="javascript:void(0)" title="Delete Property" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i>Delete</a>


      </div>
    </div>
  </td>
</tr>
@endforeach