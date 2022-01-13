<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title | App name</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-gray-50 flex flex-col">

<div class="block w-100 bg-white shadow z-50">

    <!-- header -->
    <div class="max-w-6xl mx-auto py-4  text-gray-600 text-sm  flex justify-between">
        <div class="px-6">App name</div>
        <div class="px-6 flex flex-row justify-center gap-x-6">
            <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 1</a>
            <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 2</a>
            <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 3</a>
        </div>
        <div class="px-6">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="hover:underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="hover:underline decoration-pink-500 decoration-2">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 hover:underline decoration-pink-500 decoration-2">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</div>

<!-- main page area -->
<div class="w-100 z-0">
    <div class="block max-w-6xl mx-auto z-0">

        <!-- Hero or so-->
        <div class="w-100 h-40 bg-gradient-to-br from-blue-400 to-teal-200 text-white p-8">
            <h1 class="block text-4xl font-bold">Great slogan comes here</h1>
            <h2 class="block text-2xl font-semi-bold text-blue-50">and a tagline or explanation is printed here</h2>
        </div>

        <!-- main content -->
        <main class="bg-white p-6 " style="min-height: 60vh;">
            Content can come here
        </main>
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

</body>
</html>
