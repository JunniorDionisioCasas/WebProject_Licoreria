<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar mayoría de edad</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/age_confirmation.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid text-center">
        <div class="col main">
            <div class="row row-cols-2">
                <div class="col first_row_element styleForPhone">
                    <span class="nombre_empresa">San Sebastian</span>
                    <span class="tipo_empresa">Licorería y bazar</span>
                </div>
                <div class="col first_row_element grid_text">
                    <span class="confirmation_text1">BIENVENIDO</span>
                    <span class="confirmation_text2">PARA CONTINUAR DEBES SER MAYOR DE 18 AÑOS</span>
                    <div class="row row-cols-2">
                        <button id="btn_denegar" class="btn btn-danger" onclick="goBack()">SOY MENOR DE 18 AÑOS</button>
                        <button id="btn_confirmar" class="btn btn-danger" onclick="proceed()">SOY MAYOR DE 18 AÑOS</button>
                    </div>
                </div>
            </div>
            <div class="row middle_element">
                <span>NO COMPARTA ESTE CONTENIDO CON MENORES DE EDAD</span>
            </div>
            <div class="row last_element">
                <span>TOMAR BEBIDAS ALCOHÓLICAS EN EXCESO ES DAÑINO</span>
                <span>ESTÁ PROHIBIDA LA VENTA DE ALCOHOL A MENORES DE 18 AÑOS</span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const btnConf = document.getElementById("btn_confirmar");
        const btnDeng = document.getElementById("btn_denegar");
        
        if( localStorage.getItem("ageCheckConfirmed") ){
            access();
        }

        function goBack() {
            history.go(-1);
        }

        function proceed() {
            localStorage.setItem("ageCheckConfirmed", true);
            access();
        }

        function access() {
            window.location.href = "/home";
        }
    </script>
</body>
</html>