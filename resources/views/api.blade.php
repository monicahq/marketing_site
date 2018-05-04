@extends('partials.skeleton', ['pageTitle' => 'Personal CRM - Monica Api Documentation'])

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
    <div class="fl w-20-ns w-100 mb4 mb0-ns pr2">
      <ul class="list mt0 ba b--gray-monica pa2 br2 bg-near-white">
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/overview') }}">Overview</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/activities') }}">Activities</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/addresses') }}">Addresses</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/calls') }}">Calls</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/contacts') }}">Contacts</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/contactfields') }}">Contact Fields</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/contactfieldtypes') }}">Contact Field Types</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/countries') }}">Countries</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/debts') }}">Debts</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/gifts') }}">Gifts</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/journal') }}">Journal entries</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/notes') }}">Notes</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/relationships') }}">Relationships</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/relationshiptypes') }}">Relationship Types</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/relationshiptypegroups') }}">Relationship Type Groups</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/reminders') }}">Reminders</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/tags') }}">Tags</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/tasks') }}">Tasks</a>
        </li>
        <li class="mb3">
          <a class="no-underline" href="{{ secure_url('/api/changelog') }}">API changelog</a>
        </li>
      </ul>
    </div>

    <div class="fl w-80-ns w-100 markdown pl4">
      {!! $markdownDocument !!}
    </div>
  </div>
</div>

@endsection
