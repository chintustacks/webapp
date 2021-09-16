<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Charity | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700,800">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="assets/css/styles.op-charity.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">
     @stack('head')
    @show
  </head>

  <body>
    <main>
      @yield('content')


    @include('layout.user.scripts')
    @stack('scripts')


      <a class="js-go-to u-go-to-v1 g-color-gray-dark-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

   
  </body>
</html>
