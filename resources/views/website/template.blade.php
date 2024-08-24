<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    @include('website.components.navbar')
    <div class="grid grid-rows-3 divide-y">
        @if (isset($slot))
        <div class="row-span-3">
            {{$slot}}
        </div>
        @else
        <div class="row-span-3">
            @yield('content')
        </div>
        @endif
    </div>
    @include('website.components.footer')
    @livewireScripts

</body>

</html>