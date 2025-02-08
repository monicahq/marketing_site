{{-- <div class="tc center pv3 banner-officelife">
  <span class="mr1">🤗</span> Announcing <a href="https://officelife.io">OfficeLife</a>, our new open source product – the all-in-one tool to manage a company.
</div> --}}

<div class="mw8 center ph3">
  <div class="cf">
    <nav class="dt w-100 mw9 center">
      <div class="dtc w2 v-mid pt3 pb3">
        <a href="{{ secure_url('/') }}" class="db">
          {{-- Logo --}}
          <img src="{{ secure_url('/img/logo_vertical.png') }}" class="mw-none" style="width: 150px;" alt="Monica logo">
        </a>
      </div>
      <div class="dtc v-mid tr pa3">
        <a class="f6 fw4 dn dib-ns pv2 ph3" href="{{ secure_url('/features') }}">Features</a>
        <a class="f6 fw4 dn dib-ns pv2 ph3" href="{{ secure_url('/pricing') }}">Pricing</a>
        <a class="f6 fw4 dn dib-l pv2 ph3" href="{{ secure_url('/api') }}">API documentation</a>
        <a class="f6 fw4 dn dib-l pv2 ph3" href="{{ secure_url('/blog') }}">Blog</a>
        <a class="f6 fw4 dib ml2 pv2 ph3 secondary-button br3" href="https://app.monicahq.com/login">Login</a>
        <form id="form" action="{{ route('monica.register') }}" method="POST" class="inline-block" style="display: inline">
          @csrf
          <a class="f6 fw4 dib ml2 pv2 ph3 secondary-button br3 inline" href="https://app.monicahq.com/register"
            onclick="event.preventDefault(); this.parentElement.submit(); return false;"
          >
            Sign Up
          </a>
        </form>
      </div>
    </nav>
  </div>
</div>
