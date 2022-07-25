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
    <td class="text-right">
        <a href="{{route('category.edit', $category->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('category.destroy', $category->id) }}">
            <button type="button"
                class="btn btn-flat btn-danger btn-xs item-delename="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
    </td>
</tr>

