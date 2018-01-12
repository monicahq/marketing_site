<p>Hi {{ auth()->user()->email }}.</p>

<p><a href="{{ secure_url('/release/add') }}">Add a new release</a></p>

List of releases:

<ul>
@foreach ($releases as $release)
    <li>{{ $release->release_number }} - {{ $release->released_on }} - <a href="{{ secure_url('/release/'.$release->id.'/notes') }}">Add note</a></li>
@endforeach
</ul>
