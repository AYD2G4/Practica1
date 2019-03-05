<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <br>
                <br>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Carne</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">200711904</th>
      <td>William Antonio López Morales</td>
    </tr>
    <tr>
      <th scope="row">201503666</th>
      <td>Miguel Angel Omar Ruano Roca</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">201503936	</th>
      <td>Elmer Orlando Real Ixcayau</td>
    </tr>
    <tr class="table-success">
      <th scope="row">201504200</th>
      <td>Denilson Eduardo Argueta Higueros</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">201513700</th>
      <td>Christian Adolfo Real Ixcayau</td>
    </tr>
  </tbody>
</table> 
             
            </div>
        </div>
    </body>
</html>

