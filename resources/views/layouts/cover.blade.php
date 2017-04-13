<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('layouts.default-header')
<body>
{{--<div id="app">--}}
<div class="cover">
    @include('layouts.navbar')
    @yield('cover')
</div>
@yield('content')
@include('layouts.footer')
{{--</div>--}}
<!-- Scripts -->
{{--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>