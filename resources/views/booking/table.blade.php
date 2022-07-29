<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($booking->name, 47) }}</td>
    <td>{{ Str::limit($booking->company_name, 47) }}</td>
    <td>{{ Str::limit($booking->service->title, 47) }}</td>
    <td>{{ Str::limit($booking->email, 47) }}</td>
    <td>{{ Str::limit($booking->phone, 47) }}</td>

</tr>

