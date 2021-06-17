<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('images/mylogo1.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>Restoran</title>
</head>
<body>
    <div class="wrapper">
        <!-- NAVBAR -->
            @include('layouts.includes._navbar')
        <!-- END NAVBAR -->
        <div class="row">
            <div class="col-md-1">
                <!-- NAVBAR -->
                	@include('layouts.includes._sidebar')
                <!-- END NAVBAR -->
            </div>
            <div class="col-md-11">
                <!-- Main -->
                @yield('content')
                <!-- End Main -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Footer -->
            <footer class="page-footer font-small mt-3">
        
            <!-- Copyright -->
            <div class="footer-copyright text-center py-1">© 2020 Copyright
              <a href="https://instagram.com/rafli_compro65"> MUHAMMAD RAFLI</a> - <span>CEO CopasDev</span>
            </div>
            <!-- Copyright -->
          
            </footer>
            <!-- Footer -->
        </div>
    </div>
</body>
</html>