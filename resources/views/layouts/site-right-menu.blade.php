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
