<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $title }} | {{ config('app.name') }} </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css?'.rand(1,1000)) }}">

    <!-- Scripts -->
    @if($withAlpine)
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @endif
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class="antialiased bg-gray-50 relative">

    @includeWhen($withToaster && session()->has('success'), 'layouts.site-toastr')

    <div class="block w-100 bg-white shadow z-50">

        <!-- header -->
        <div class="max-w-6xl mx-auto py-4 z-40 text-gray-600 text-sm  flex justify-between">
            <div class="px-6">{{ config('app.name') }}</div>
            <x-site-menu/>
            <x-site-right-menu/>
        </div>
    </div>


<!-- main page area -->
<div class="w-100 z-0">
    <div class="block max-w-6xl mx-auto z-0">

        {{ $slot }}

    </div>
</div>

<!-- footer area -->
<div class="w-100 bg-gray-800 text-gray-300 py-12">
    <div class="block p-5 max-w-6xl mx-auto z-0 min-h-full flex flex-row justify-between">
        <div>
            A footer contains the site info
        </div>
        <div>
            And some legal mentions
        </div>
        <div>
            And typically some contact info
        </div>

    </div>
</div>

    @livewireScripts
</body>
</html>

