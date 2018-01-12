<p><a href="{{ secure_url('dashboard') }}">Dashboard</a> > Release {{ $release->release_number }}</p>

<p>{{ $release->description }}</p>

<p><a href="{{ secure_url('/release/'.$release->id.'/notes/add') }}">Add a new note</a></p>
<table>
    @foreach ($release->notes as $note)
    <tr>
        <td>{{ $note->release_id }}</td>
        <td>{{ $note->description }}</td>
        <td>{{ $note->github_pull_request_number }}</td>
        <td>{{ $note->github_pull_request_url }}</td>
        <td>{{ $note->github_author_name }}</td>
        <td>{{ $note->github_author_url }}</td>
        <td>{{ $note->category }}</td>
    </tr>
    @endforeach
</table>
