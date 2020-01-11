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

<form method="POST" action="{{ secure_url('/release/store') }}">
    @csrf
    <p>Release number</p>
    <input type="text" name="release_number" required>

    <p>Description (optional)</p>
    <textarea name="description" cols="100" rows="20"></textarea>

    <p>Released on (YYYY-MM-DD)</p>
    <input type="date" name="released_on">

    <button type="submit">Save</button>
</form>
