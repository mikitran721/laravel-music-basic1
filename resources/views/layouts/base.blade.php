<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>
        {{-- not same --}}
        @yield('title')
    </title>
</head>
<body>
    {{-- header same --}}
    @include('layouts.header')
    
    {{-- Main content --}}
    <div class="container-fluid">
        @yield('main')
    </div>
    
    {{-- footer same --}}
    @include('layouts.footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>