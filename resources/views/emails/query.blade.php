<div>
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $query->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $query->email }}</td>
        </tr>
        @if($query->phone)
        <tr>
            <th>Phone</th>
            <td>{{ $query->phone }}</td>
        </tr>
        @endif
        <tr>
            <th>Page URL</th>
            <td><a href="{{ @$query->page_url }}">{{ @$query->page_url }}</a></td>
        </tr>
        <tr>
            <th>Query Message</th>
            <td>{{ $query->query_msg }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ @date('d M, Y h:i:s A', strtotime($query->created_at)) }}</td>
        </tr>
    </table>
</div>