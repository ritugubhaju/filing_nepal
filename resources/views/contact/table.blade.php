<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($contact->name, 47) }}</td>
    <td>{{ Str::limit($contact->email, 47) }}</td>
    <td>{{ Str::limit($contact->mobile, 47) }}</td>
    <td>{{ Str::limit($contact->subject, 255) }}</td>
    <td>{{ Str::limit($contact->message, 255) }}</td>

</tr>

