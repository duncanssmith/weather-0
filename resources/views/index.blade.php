<x-layout>
    <section class="px-6 py-2">
        <h1>Weather API app</h1>
        <h2>{{ $user->name }}</h2>
        <h2>{{ $user->location }}</h2>
        <br/>
        <a class="px-2 py-2 border border-gray-600" href="{{ $url }}" target="_blank">Click for 5 day weather data for {{ $user->location }}</a>
        <br/>
        <br/>
        <div id="weather_container" class="px-2 py-2 border border-gray-600"></div>
    </section>

</x-layout>
