<!DOCTYPE html>
<html>
    <!--header-->
    @include('template.header')
    <body>
        @yield('content')

        @include('template.scripts')
    </body>
</html>