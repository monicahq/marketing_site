@extends('partials.skeleton', ['pageTitle' => 'Personal CRM - Monica pricing page'])

@section('content')

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-100 tc mb5">
      <h1 class="f2 normal lh-copy">How much does Monica cost?</h1>
      <h2 class="normal lh-copy measure center">Nothing if you <a href="https://github.com/monicahq/monica#get-started">host it yourself</a>. Otherwise, Monica is the single best investment you can make to have better relationships.</h2>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb3">
  <div class="flex justify-center mb3">
    <div class="ba mw7 tc pa3 br3 bw2 b--dark-blue ph5">
      <a href="https://app.monicahq.com/register" class="no-underline" style="color: #293C45;">
        <h2 class="normal f2 mt2 mb2">Just $5/month</h2>
        <p class="f6 i">Or, pay $45/year and save 25%.</p>
        <p class="lh-copy"><span class="sketch-underline">Flat pricing • No per-contacts fees</span> • Unlimited contacts • Unlimited reminders</p>
      </a>
    </div>
  </div>
  <div class="flex justify-center">
    <p class="measure lh-copy">We also offer a <a href="https://app.monicahq.com">free plan</a>, that comes with 10 contacts but some features are restricted. And if you are into computer and stuff, you can also <a href="https://github.com/monicahq/monica#get-started">install it on a server that you own</a>. And if you don't trust us, you can <a href="https://github.com/monicahq/monica#get-started">always install the exact same version</a> that we run here, on a server that you own, for free.</p>
  </div>
</div>

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-100">
      <h2 class="tc-ns">Common questions</h2>
      <h3 class="tc-ns measure center-ns">How do I cancel my subscription?</h3>
      <p class="measure center-ns lh-copy mb4">You can cancel anytime you want. To do that, simply go to your settings, under subscriptions, and cancel your account. That’s it. You'll continue to have full access to Monica until the end of your trial or current billing period. After cancellation, you'll retain access to your account until the next time you're ready to use Monica.</p>

      <h3 class="tc-ns measure center-ns">Are there any long-term commitments or cancellation fees?</h3>
      <p class="measure lh-copy center-ns mb4">There are no hidden fees, ever. There are also no commitments whatsoever. You are free to leave whenever you want. You can upgrade, downgrade, cancel and delete your account when you want. There are no cancellation fees.</p>

      <h3 class="tc-ns measure center-ns">Is my data safe?</h3>
      <p class="measure lh-copy center-ns mb4">We do our best to make the most secure software. Monica is open source, and the source code is scrutinized by thousands of eyes. That being said, nothing is ever safe when it’s online. This is why we offer you the possibility to install Monica on your server, for free.</p>

      <h3 class="tc-ns measure center-ns">What is an open source project?</h3>
      <p class="measure lh-copy center-ns mb6-ns">Monica is an open source project. That means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. That also means anyone can install Monica on a server they own.</p>
    </div>
  </div>
</div>

@endsection
