@ictoirebatsextends('partials.skeleton', ['pageTitle' => 'Monica privacy page'])

@section('content')

<div class="mw8 center ph3 mt4">
  <div class="cf">
    <div class="fl w-100 tc mb2">
      <h1 class=" normal mb2">Our privacy policy</h1>
      <p class="normal lh-copy measure center">Last update: April 12, 2018</p>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb6">
  <div class="cf">
    <div class="w-100 w-60-ns center">
      <p class="measure lh-copy">Monica is an open source project. The hosted version has a premium plan that let us collect money so we can pay for the servers and additional servers, but the main goal is not to make money (otherwise we wouldn't have opened source it).</p>
      <p class="measure lh-copy">Monica comes in two flavors: you can either use our hosted version, or download it and run it yourself. In the latter case, we do not track anything at all. We don't know that you've even downloaded the product. Do whatever you want with it (but respect your local laws).</p>
      <p class="measure lh-copy">When you create your account on our hosted version, you are giving the site information about yourself that we collect. This includes your name, your email address and your password, that is encrypted before being stored. We do not store any other personal information.</p>
      <p class="measure lh-copy">When you login to the service, we are using cookies to remember your login credentials. This is the only use we do with the cookies.</p>
      <p class="measure lh-copy">Monica runs on Linode and we are the only ones, apart from Linode's employees, who have access to those servers.</p>\
      <p class="measure lh-copy">We do hourly backups of the database.</p>
      <p class="measure lh-copy">Your password is encrypted with bcrypt, a password hashing algorithm that is highly secure. You can also activate two factor authentication on your account if you need an extra layer of security. Apart from those encryptions mechanism, your data is not encrypted in the database. If someone gets access to the database, they will be able to read your data. We do our best to make sure that this will never happen, but it can happen.</p>
      <p class="measure lh-copy">If a data breach happens, we will contact the users who are affected to warn them about the breach.</p>
      <p class="measure lh-copy">Transactional emails are dserved through Postmark.</p>
      <p class="measure lh-copy">We use an open source tool called Sentry to track errors that happen in production. Their service records the errors, but they don't have access to any information apart the account ID, which lets me debug what's going on.</p>
      <p class="measure lh-copy">The site does not currently and will never show ads. It also does not, and don't intend to, sell data to a third party, with or without your consent. We are just against this. Fuck ads.</p>
      <p class="measure lh-copy">We do no use any tracking third parties, like Google Analytics or Intercom, that track user behaviours or data, neither on the marketing site or the hosted version. We are deeply against their principles as they would use those data to profile you, which we are totally against.</p>
      <p class="measure lh-copy">All the data you put on Monica belongs to you. We do not have any rights on it. Please don't put illegal stuff on it, otherwise we'd be in trouble.</p>
      <p class="measure lh-copy">All the information about the contacts you put on Monica are private to you. We do not cross link information between accounts or use one information in an account to populate another account (unlike Facebook for instance).</p>
      <p class="measure lh-copy">We use Stripe to collect payments made to access the paid version. We do not store credit card information or anything concerning the transactions themselves on our servers. However, as per the open source library we use to process the payments (Laravel Cashier), we store the last 4 digits of the credit card, the brand name (VISA or MasterCard). As a user, you are identified on Stripe by a random number that they generate and use.</p>
      <p class="measure lh-copy">Regarding the payments, you can downgrade to the free plan whenever you like. When you do, Stripe is automatically updated and we have no way to charge you again, even if we would like to. The less we deal with payment information, the happier we are.</p>
      <p class="measure lh-copy">You can export your data at any time. You can also use the API to export all your data if you know how to do it. You can also request that we process this ourselves and send it to you. Your data will be exported in the SQL format.</p>
      <p class="measure lh-copy">When you close your account, we immediately destroy all your personal information and don't keep any backup. While you have control over this, we can delete an account for you if you ask us.</p>
      <p class="measure lh-copy">In certain situations, we may be required to disclose peronal data in response to lawful requests by public authorities, including to met national security or law enforcements requirements. We just hope that this never happens.</p>
      <p class="measure lh-copy">If you violate the terms of use we will terminate your account and notify you about it. However if you follow the "don't be a dick" policy, nothing should ever happen to you and we'll all be happy.</p>
      <p class="measure lh-copy">Monica uses only open-source projects that are mainly hosted on Github.</p>
      <p class="measure lh-copy">We will update this privacy policy as soon as we introduce new information practices. If we do, we will send an email to the email address specified in your account. We will never be a dick about it and will never, ever, introduce something in what we do that will affect your right to the absolute privacy.</p>
    </div>
  </div>
</div>
@endsection
