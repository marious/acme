<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('browsertitle')</title>
    <link rel="stylesheet" href="http://localhost/modern/assets/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/modern/assets/css/style.css">
    @yield('css')
  </head>
  <body>

    @include('topnav')
    @yield('outsidecontainer')

    <div class="container">

      <div class="row">
        <br>
        @include('errormessage')
      </div>

      @yield('content')

    </div><!-- ./ container -->


      <footer>
        copyright &copy; <?php echo date('Y'); ?>
      </footer>

  <script src="http://localhost/modern/assets/js/jquery-1.11.2.min.js"></script>
  <script src="http://localhost/modern/assets/js/jquery-validate.min.js"></script>
  <script src="http://localhost/modern/assets/js/bootstrap.js"></script>
    @yield('footerjs')
  </body>
</html>