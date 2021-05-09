<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }} @hasSection('page-title') : @yield('page-title') @endif</title>
    <link href="{{ asset('img/logo.svg') }}" rel="shortcut icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    @yield('styles')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans leading-none text-gray-700 antialiased">

@yield('body')

</body>
</html>