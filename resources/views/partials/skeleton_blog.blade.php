<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $pageTitle }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="alternate" type="application/rss+xml" title="{{ trans('marketing.xml_feed_description') }}" href="{{ url("/feed.xml") }}">
  <meta name="description" content="{{ trans('marketing.description') }}">
  <link rel="me" href="https://phpc.social/@monica">
  <link rel="author" href="https://phpc.social/@regis">
  <link rel="shortcut icon" href="{{ secure_url('/img/favicon.png') }}">
  <link rel="alternate" type="application/atom+xml" title="News" href="/feed">

  <!-- Open Graph -->

  <!-- Between 60 and 80 char. Cut at 88. -->
  <meta property="og:title" content="{{ $post->title }}" />
  <meta property="og:url" content="{{ secure_url('/blog/'.$post->slug) }}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="{{ config('app.name') }}" />
  <meta property="og:description" content="{{ $post->social_media_description }}" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="article:published_time" content="{{ $post->created_at->format('Y-m-d') }}" />
  <meta property="og:image" content="{{ secure_url('/img/social/posts/'.$post->created_at->format('Y-m-d').'/facebook.png') }}" />
</head>

<body class="sans-serif">
  @include ('partials.menu')

  @yield('content')

  @include ('partials.footer')
</body>

</html>
