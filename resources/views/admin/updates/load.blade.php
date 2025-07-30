@foreach($data as $key => $val)
<tr>
  <td>{{++$key}}</td>
  <td>
    <img src="{{URL::to('public/storage/updates/'.$val->banner)}}" height="35px">&nbsp;&nbsp;
    {{$val->heading}}
  </td>
  <td><a href="{{$val->link}}" target="_blank">{{$val->link}}</a></td>
  <td class="text-right"><small>{{date('d-M-Y | h:i A', strtotime($val->created_at))}}</small></td>

  <td class="text-right">
    <div class="btn-group">
      <button type="button" class="btn btn-info btn-sm">Action</button>
      <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
        <span class="sr-only">Action</span>
      </button>
      <div class="dropdown-menu dropdown-menu-right table-dropdown" role="menu">

        <a class="dropdown-item editUpdate" href="javascript:void(0)" title="Edit Update" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i>Edit</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger deleteUpdate" href="javascript:void(0)" title="Delete Update" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i>Delete</a>


      </div>
    </div>
  </td>
</tr>
@endforeach