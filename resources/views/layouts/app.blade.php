<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body id="app-layout">
    @include('layouts.header')
    @include('layouts.carousel')

    @yield('content')
    <!-- JavaScripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
