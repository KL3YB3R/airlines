<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>@yield('title-page')</title>
</head>
<body class="p-0 m-0">
    {{-- ! INLUDE HEADER --}}
    @include('header')
    {{-- ! INLUDE CONTENT --}}
    @yield('content')
    {{-- ! INLUDE FOOTER --}}

</body>
</html>
