<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<link rel="stylesheet" href="{{asset('otros/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('otros/css/jquery.dataTables.min.css')}}">
<title>
</title>
 <body>
 
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         @yield('content')
        </div>

</diV>  
</div>


    <script type "text/javascript" src="{{asset('otros/js/jquery-3.1.1.js')}}"></script>
     <script type "text/javascript" src="{{asset('otros/css/js/bootstrap.min.js')}}" ></script>
    


        <!-- App scripts -->
        @stack('scripts')
</body>

</html>