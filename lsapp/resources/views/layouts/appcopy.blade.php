<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSApp')}}</title>
      
    </head>
    <body>
        @include('inc.navbar4')
        <div class="container">
            @include('inc.messages')
            @yield('content') 
        </div>
        <!-- ckeditor 4 -->
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        <!-- Ckeditor 5 (Classic Editor ) -->
        <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>
</html>
