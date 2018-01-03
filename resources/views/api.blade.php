@extends('partials.skeleton', ['pageTitle' => 'Monica Api Documentation'])

@section('content')

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-70-ns w-100">
      {!! $markdownDocument !!}
    </div>

    <div class="fl w-30-ns w-100 pl5-ns mb4 mb0-ns">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{ url('/api/overview') }}">Overview</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/contacts') }}">Contacts</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/addresses') }}">Addresses</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/contactfields') }}">Contact Fields</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/notes') }}">Notes</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/activities') }}">Activities</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/reminders') }}">Reminders</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/tasks') }}">Tasks</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/tags') }}">Tags</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/calls') }}">Calls</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/gifts') }}">Gifts</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/debts') }}">Debts</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/journal') }}">Journal entries</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/contactfieldtypes') }}">Contact Field Types</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/countries') }}">Countries</a>
        </li>
        <li class="list-group-item">
          <a href="{{ url('/api/changelog') }}">API changelog</a>
        </li>
      </ul>

    </div>
  </div>
</div>

@endsection
