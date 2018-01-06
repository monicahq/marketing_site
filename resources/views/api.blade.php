@extends('partials.skeleton', ['pageTitle' => 'Monica Api Documentation'])

@section('content')

<div class="bb bt b--gray-monica mb4">
  <div class="mw8 center">
    <div class="cf ph3">
      <div class="fl w-100">
        <p class="pv2 fw6">API documentation</p>
      </div>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb5">
  <div class="cf">
    <div class="fl w-20-ns w-100 mb4 mb0-ns">
      <ul class="list pl0 mt0">
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/overview') }}">Overview</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/contacts') }}">Contacts</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/addresses') }}">Addresses</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/contactfields') }}">Contact Fields</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/notes') }}">Notes</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/activities') }}">Activities</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/reminders') }}">Reminders</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/tasks') }}">Tasks</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/tags') }}">Tags</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/calls') }}">Calls</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/gifts') }}">Gifts</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/debts') }}">Debts</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/journal') }}">Journal entries</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/contactfieldtypes') }}">Contact Field Types</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/countries') }}">Countries</a>
        </li>
        <li class="mb2">
          <a class="no-underline" href="{{ url('/api/changelog') }}">API changelog</a>
        </li>
      </ul>
    </div>

    <div class="fl w-80-ns w-100 markdown">
      {!! $markdownDocument !!}
    </div>
  </div>
</div>

@endsection
