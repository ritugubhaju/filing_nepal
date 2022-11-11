<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($subcategory->title, 47) }}</td>
    <td>{{ Str::limit($subcategory->category->title, 47) }}</td>
    <td>
    @if($subcategory->status == 1)
     {{'Active'}}
    @else
    {{'Inactive'}}
    @endif
    </td>
    <td>
        <a href="{{route('subcategory.edit', $subcategory->slug)}}">
            <button type="button" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="mdi mdi-pencil"></i>
            </button>
        </a>

        <button type="button" onclick="deleteThis(this); return false;" link="{{ route('subcategory.destroy', $subcategory->id) }}" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="far fa-trash-alt"></i>
        </button>

    </td>
</tr>

