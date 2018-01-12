@if (isset($errors))
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
@endif

<form method="POST" action="{{ secure_url('/release/'.$release->id.'/notes/store') }}">
    {{ csrf_field() }}

    <p>Release number: {{ $release->release_number }}</p>

    <p>Description</p>
    <textarea name="description" cols="100" rows="20"></textarea>

    <p>Pull request number on Github</p>
    <input type="text" name="github_pull_request_number">

    <p>Github author name</p>
    <input type="text" name="github_author_name">

    <p>Screenshot URL</p>
    <input type="text" name="screenshot_url">

    <p>Category ('new', 'improvements', 'fixed')</p>
    <input type="text" name="category">

    <button type="submit">Save</button>
</form>
