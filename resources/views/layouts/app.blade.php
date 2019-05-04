<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test App - @yield('title')</title>

        @include('partials._stylesheets')

    </head>
      <body>
        @include('partials._sidebar')

        <div class="container">
           <div class="row">
             <div class="col-sm-12">
               @yield('content')
             </div>
           </div>
         </div>

         @include('partials._scripts')
    </body>
</html>
