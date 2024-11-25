<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('kta_layout.partials.head')
        
    </head>
    <body>
        
        
        @yield('content')
        

        @stack('scripts')
    </body>
</html>
