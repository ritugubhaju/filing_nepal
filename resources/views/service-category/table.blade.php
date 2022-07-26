<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($category->title, 47) }}</td>
    <td>
    @if($category->status == 1)
     {{'Active'}}
    @else
    {{'Inactive'}}
    @endif
    </td>
    <td>
        <a href="{{route('category.edit', $category->slug)}}">
            <button type="button" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="mdi mdi-pencil"></i>
            </button>
        </a>

        <button type="button" onclick="deleteThis(this); return false;" link="{{ route('category.destroy', $category->id) }}" class="btn btn-icon-toggle btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="far fa-trash-alt"></i>
        </button>
       
    </td>
</tr>

