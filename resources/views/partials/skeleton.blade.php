<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $pageTitle }}</title>

  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
  <link rel="alternate" type="application/atom+xml" title="{{ trans('marketing.xml_feed_description') }}" href="{{ route("feeds.main") }}">
  <meta name="description" content="{{ trans('marketing.description') }}">
  <link rel="author" href="https://twitter.com/djaiss">
  <link rel="shortcut icon" href="{{ secure_url('/img/favicon.png') }}">

  <!-- Facebook -->

  <!-- Between 60 and 80 char. Cut at 88. -->
  <meta property="og:title" content="{{ trans('marketing.og_title') }}" />
  <meta property="og:url" content="{{ secure_url('/') }}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="{{ config('app.name') }}" />
  <meta property="og:description" content="{{ trans('marketing.description') }}" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image" content="{{ secure_url('/img/social/site/facebook.png') }}" />
  <meta property=”fb:admins content="regis.freyd" />

  <!-- META SPECIFIC TO TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@MonicaHQ_app">
  <meta name="twitter:creator" content="@djaiss">
  <meta name="twitter:title" content="{{ config('app.name') }}">
  <meta name="twitter:description" content="{{ trans('marketing.description') }}">
  <meta name="twitter:image" content="{{ secure_url('/img/social/site/twitter.png') }}">

  <!-- Scripts -->
  <script src="{{ asset(mix('js/app.js')) }}" defer></script>

</head>

<body class="sans-serif">
  @include ('partials.menu')

  @yield('content')

  @include ('partials.footer')

  <!-- Fathom - simple website analytics - https://usefathom.com -->
  <script>
    (function(f, a, t, h, o, m) {
      a[h] = a[h] || function() {
        (a[h].q = a[h].q || []).push(arguments)
      };
      o = f.createElement('script'),
        m = f.getElementsByTagName('script')[0];
      o.async = 1;
      o.src = t;
      o.id = 'fathom-script';
      m.parentNode.insertBefore(o, m)
    })(document, window, 'https://cdn.usefathom.com/tracker.js', 'fathom');
    fathom('set', 'siteId', 'TZPOGJXQ');
    fathom('trackPageview');
  </script>
  <!-- / Fathom -->
</body>

</html>
