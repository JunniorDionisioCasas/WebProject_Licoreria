<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bazar Licorería San Sebastián | @yield('title')</title>
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
        <link rel="stylesheet" href="/css/header.css">

        @yield('css')

        <!-- META TAGS -->
        <meta name="viewport" content="width=device-width" />
    </head>
    <body id="bd" class=" cms-index-index cms-simen-home-page-v2 default cmspage">
        <div id="sns_wrapper">

            <!-- HEADER -->
            @include('layouts/header')
            <!-- END HEADER -->

            @yield('slideshow')

            
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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- custom js's -->
        <script src="js/carrito.js"></script>
        <script>
            window.watsonAssistantChatOptions = {
                integrationID: "e58b6148-ecac-4fc6-83a4-1a1a8ed90a44", // The ID of this integration.
                region: "us-south", // The region your integration is hosted in.
                serviceInstanceID: "537f3d21-6131-4912-bb28-ec00c90baf38", // The ID of your service instance.
                onLoad: function(instance) { instance.render(); }
            };
            setTimeout(function(){
                const t=document.createElement('script');
                t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
                document.head.appendChild(t);
            });
        </script>

        @yield('js')

    </body>
    <script>
        if( localStorage.getItem("ageCheckConfirmed") ){
            console.log("age alredy checked");
        }else{
            window.location.href = "/";
        };
    </script>
</html>
