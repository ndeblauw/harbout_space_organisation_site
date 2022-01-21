<x-site-layout title="Welcome">

        <!-- Hero or so-->
        <div class="w-100 h-40 bg-gradient-to-br from-blue-400 to-teal-200 text-white p-8">
            <h1 class="block text-4xl font-bold"> {{ __('welcome.slogan') }}</h1>
            <h2 class="block text-2xl font-semi-bold text-blue-50">{{ __('and a tagline or explanation is printed here') }}</h2>
        </div>

        <!-- main content -->
        <main class="bg-white p-6 flex flex-row" style="min-height: 60vh;">

            <div class="w-2/3">
                <h2 class="text-3xl font-bold">Our upcoming events - Waw</h2>
                <x-activity-list :activities="$upcoming"/>
            </div>

            <div class="w-1/3 bg-gray-50 p-5">
                <h3 class="font-semibold">We have events in</h3>
                @foreach($locations as $location)
                    <span class="px-2 bg-teal-100 text-teal-500 rounded-lg">{{$location->name}}</span>
                @endforeach

                <h3 class="mt-8 font-semibold">Showcasing some past activities</h3>
                <x-activity-list :activities="$selection_past"/>
            </div>

        </main>

</x-site-layout>
