<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('custom_layout_users.partials.head')
        
    </head>
    <body>
        @include('custom_layout_users.partials.sides')




        @yield('content')




                    
        {{-- @include('custom_layout_users.partials.header') --}}
        
        
        {{-- @include('custom_layout_users.partials.footer')

        @include('custom_layout_users.partials.footer-scripts') --}}




        @include('custom_layout_users.partials.modal')
        
         {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/app.js') }}"></script>
        @include('custom_layout_users.partials.footer') 
        @include('custom_layout_users.partials.footer-scripts')
    </body>
    
</html>
