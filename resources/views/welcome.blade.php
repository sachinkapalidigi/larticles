<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- add these two lines to avoid error --}}
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.Laravel = {csrfToken:'{{csrf_token()}}'}</script>

        <title>Laravel Articles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <script src="{{ asset('/js/app.js') }}"></script>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <articles></articles>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
