<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset(mix('css/app2.css')) }}">

  <!-- Scripts -->
  @routes
  <script src="{{ asset(mix('js/app2.js')) }}" defer></script>

  <!-- analytics -->
  <script defer type="text/javascript" src="https://api.pirsch.io/pirsch.js" id="pirschjs" data-code="lTlFdjRHJTDy7p3P9NQRj6prkSbz83tk"></script>
</head>

<body class="font-sans antialiased">
  @inertia
</body>

</html>
