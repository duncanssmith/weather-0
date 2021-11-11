<x-layout>
    <section class="px-6 py-2">
        <h1>Weather API app</h1>
        <h2>{{ $user->name }}</h2>
        <h2>{{ $user->location }}</h2>
        <h2>{{ $urlForecast }}</h2>
        <h2>{{ $urlCurrent }}</h2>
        <br/>
        <a class="px-2 py-2 border border-gray-600" href="{{ $urlForecast }}" target="_blank">Click for 5 day weather data for {{ $user->location }}</a>
        <br/>
        <br/>
        <a class="px-2 py-2 border border-gray-600" href="{{ $urlCurrent }}" target="_blank">Click for current weather data for {{ $user->location }}</a>
        <br/>
        <br/>

        <!-- <div id="weather_container" class="px-2 py-2 border border-green-600"></div> -->
        <!-- <br/> -->
        <!-- <br/> -->


        <!-- <div id="example" class="px-2 py-2 border border-red-600"></div> -->
        <!-- <br/> -->
        <!-- <br/> -->


        <!-- <div id="weather" class="px-2 py-2 border border-blue-600"></div> -->
        <!-- <br/> -->
        <!-- <br/> -->

    </section>

</x-layout>
