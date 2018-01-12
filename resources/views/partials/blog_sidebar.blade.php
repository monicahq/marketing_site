<ul class="list pl0 bt b--gray-monica">
  @foreach ($categories as $category)
  <li class="br bl bb b--gray-monica ph2 pv3 f6">
    <a class="no-underline" href="{{ url('blog/category/'.$category->slug) }}">{{ $category->name }}</a>
  </li>
  @endforeach
</ul>

<div class="b--gray-monica ba br3 pa3 tc">
  <img src="{{ url('/img/upgrade_account.png') }}">
  <p class="lh-copy">Strenghten the personal relationships with your friends and family.</p>
  <p><a href="https://app.monicahq.com" class="secondary-button br3 pv2 ph3 dib fw5">Sign up</a></p>
</div>
