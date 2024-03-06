<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/safari-pinned-tab.svg')}}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <livewire:admin.partials.head>
        @livewireStyles
        @livewireScripts

</head>

<body>
    <livewire:admin.partials.navigation />
    <livewire:admin.partials.sidebar />

    <main class="content">
        <livewire:admin.partials.navbar />
        {{$slot}}
        <livewire:admin.partials.footer />
    </main>

    <livewire:admin.partials.script />
</body>

</html>