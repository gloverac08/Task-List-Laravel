<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- load compiled css assets -->
        <link rel="stylesheet" href="/css/app.css"> 
        <title>{{config('app.name')}}</title>
       
    </head>
    <body>
        <!-- render task-list view -->
        @yield('content')
        <!-- load compiled js assets to enable bootstrap jquery plugin -->
        <script src="/js/app.js"></script>
    </body>
</html>
