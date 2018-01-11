<form method="POST" action="{{ url('/release/store') }}">
    {{ csrf_field() }}
    <p>Release number</p>
    <input type="text" name="release_number" required>

    <p>Description (optional)</p>
    <textarea name="description"></textarea>

    <p>Github release url (optional)</p>
    <input type="url" name="github_release_url">

    <p>Released on (YYYY-MM-DD)</p>
    <input type="date" name="released_on">

    <button type="submit">Save</button>
</form>
