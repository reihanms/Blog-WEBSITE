<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login/style.css">
    <link rel="stylesheet" type="text/css" href="/css/login/bootstrap.min.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="/css/login/fontawesome-all.min.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="/css/login/iofrm-style.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="/css/login/iofrm-theme19.css?v=1.1">
    <link rel="stylesheet" type="text/css"  href="/css/home/style.css?v=1.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>{{ $title }}</title>
  </head>
  <body>
    
        @include('../partials/navbar')
    <div class="container mt-4">
        @yield('isinya')
    </div>

    {{-- import sweetalert library --}}
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/javascript/login/jquery.min.js"></script>
    <script src="/javascript/login/js/popper.min.js"></script>
    <script src="/javascript/login/js/bootstrap.min.js"></script>
    <script src="/javascript/login/js/main.js"></script>
    <script src="/javascript/home/jquery.js"></script>			                                       
    <script src="/javascript/home/jquery.sticky.js"></script>			                                               
    <script src='/javascript/home/imagesloaded.pkgd.js'></script>                
    <script src='/javascript/home/jquery.fitvids.js'></script>                
    <script src='/javascript/home/jquery.smartmenus.min.js'></script>                                 
    <script src='/javascript/home/isotope.pkgd.js'></script>                                                 
    <script src='/javascript/home/owl.carousel.min.js'></script>                                                         
    <script src='/javascript/home/main.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>