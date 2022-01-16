<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
			href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
			rel="stylesheet"
		/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      
        <title>{{config('app.name')}}</title>
    <body>


      
      
      <div class="container">
          
            @include('inc.navBar4apply')
            @include('inc.messages')
            @yield('content')
      </div>
     </div>
   
   </body>
</html>
