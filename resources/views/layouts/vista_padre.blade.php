<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina de inicio</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,700' rel='stylesheet' type='text/css'>
        <!-- Style Sheet-->

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <!--https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css
        https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css
        <link rel="stylesheet" type="text/css" href="{asset('public//jquery-nice-select/nice-select.css')}"/> -->
        <!-- <link rel="stylesheet" href="template/css/bootstrap.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="template/css/style.css">
        <link rel="stylesheet" href="template/js/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="template/js/owl-carousel/owl.theme.css">
        <link rel="shortcut icon" href="images/favicon.ico">

        @yield('css')

        <!-- META TAGS -->
        <meta name="viewport" content="width=device-width" />
    </head>
    <body id="bd" class=" cms-index-index cms-simen-home-page-v2 default cmspage">
        <div id="sns_wrapper">
            <!-- HEADER -->
            @include('layouts/header')
            <!-- END HEADER -->

            @yield('contenido_principal')

            <!-- FOOTER -->
            @include('layouts/footer')
            <!-- END FOOTER -->
        </div>
        <!-- Scripts -->
        <script src="template/js/jquery-1.9.1.min.js"></script>
        <!-- <script src="template/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="template/js/less.min.js"></script>
        <script src="template/js/sns-extend.js"></script>
        <script src="template/js/custom.js"></script>
        <!-- <script src="owl-carousel/jquery.min.js"></script> -->
        <script src="template/js/owl-carousel/owl.carousel.min.js"></script>

        @yield('js')

    </body>
</html>
