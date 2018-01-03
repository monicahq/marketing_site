<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ trans('marketing.title') }}</title>

  <link rel="canonical" href="{{ url('/') }}">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="alternate" type="application/rss+xml" title="{{ trans('marketing.xml_feed_description') }}" href="{{ url("/feed.xml") }}">
  <meta name="description" content="{{ trans('marketing.description') }}">
  <link rel="author" href="https://twitter.com/djaiss">
  <link rel="shortcut icon" href="{{ url('/img/favicon.png') }}">

  <!-- Facebook -->

  <!-- Between 60 and 80 char. Cut at 88. -->
  <meta property="og:title" content="{{ trans('marketing.og_title') }}" />
  <meta property="og:url" content="{{ url('/') }}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="{{ config('app.name') }}" />
  <meta property="og:description" content="{{ trans('marketing.description') }}" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image" content="{{ url('/img/social/site/facebook.png') }}" />
  <meta property=”fb:admins content="regis.freyd" />

  <!-- META SPECIFIC TO TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@MonicaHQ_app">
  <meta name="twitter:creator" content="@djaiss">
  <meta name="twitter:title" content="{{ config('app.name') }}">
  <meta name="twitter:description" content="{{ trans('marketing.description') }}">
  <meta name="twitter:image" content="{{ url('/img/social/site/twitter.png') }}">

</head>
