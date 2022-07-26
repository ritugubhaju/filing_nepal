<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($service->title, 47) }}</td>
    <td>{{ Str::limit($service->category->title, 47) }}</td>
    <td>
    @if($service->status == 1)
     {{'Active'}}
    @else
    {{'Inactive'}}
    @endif
    </td>
    <td>
        <a href="{{route('service.edit', $service->slug)}}">
            <button type="button" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="mdi mdi-pencil"></i>
            </button>
        </a>

        <button type="button" onclick="deleteThis(this); return false;" link="{{ route('service.destroy', $service->id) }}" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="far fa-trash-alt"></i>
        </button>

    </td>
</tr>

