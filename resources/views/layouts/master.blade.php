<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <title>Laravel</title>
    </head>
    <body>
        
        <div id="app">
            @include('layouts.header')
            <section class="section">
                <div class="container">
                    <router-view></router-view> 
                </div>
            </section>
        </div>
        <script src="/js/app.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </body>
</html>
