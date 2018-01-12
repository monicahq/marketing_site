@extends('partials.skeleton', ['pageTitle' => 'Monica pricing page'])

@section('content')

<div class="mw8 center ph3 mt4">
  <div class="cf">
    <div class="fl w-100 tc mb2">
      <h1 class=" normal mb2">Our privacy policy</h1>
      <p class="normal lh-copy measure center">Last update: June 20, 2017</p>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb6">
  <div class="cf">
    <div class="w-100 w-60-ns center">
      <p class="measure lh-copy">When you create your account, you are giving the site information about yourself that we collect. This includes your name, your email address and your password, that is encrypted before being stored. We do not store any other personal information.</p>
      <p class="measure lh-copy">When you login to the service, we are using cookies to remember your login credentials. This is the only use we do with the cookies.</p>
      <p class="measure lh-copy">Monica runs on Linode and we are the only ones, apart from Linode's employees, who have access to those servers.</p>
      <p class="measure lh-copy">Transactional emails are served through Postmark.</p>
      <p class="measure lh-copy">The site does not and will never show ads. It also does not, and don't intend to, sell data to a third party.</p>
      <p class="measure lh-copy">Google Analytics is used on the marketing website to track visits, keywords search and to know my audience. It's also used on the hosted version of the tool provided on .com.</p>
      <p class="measure lh-copy">Intercom.io is used on the hosted version of the tool on .com.</p>
      <p class="measure lh-copy">We use Stripe to collect payments made to access the paid version. We do not store credit card information or anything concerning the transactions themselves on our servers. As per the open source library we use to process the payments (Laravel Cashier), we store the last 4 digits of the credit card, the brand name (VISA or MasterCard). As a user, you are identified on Stripe by a random number that they generate and use.</p>
      <p class="measure lh-copy">Monica uses only open-source projects that are mainly hosted on Github.</p>
      <p class="measure lh-copy">When you close your account, we immediately destroy all your personal information and don't keep any backup.</p>
    </div>
  </div>
</div>
@endsection
