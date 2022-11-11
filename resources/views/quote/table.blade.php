<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($quote->name, 47) }}</td>
    <td>{{ Str::limit($quote->email, 47) }}</td>
    <td>{{ Str::limit($quote->phone, 47) }}</td>
    <td>{{ Str::limit($quote->service->title, 47) }}</td>
    <td>{{ Str::limit($quote->organization, 47) }}</td>

</tr>

