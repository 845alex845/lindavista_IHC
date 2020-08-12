<!DOCTYPE html>

<html lang="es">
<head>
<?php
// require ("./en/local.php");
// // Establecer lenguaje. Por defecto se toma el español
// $lang = $_REQUEST["lang"];
// if (!isset($lang) || !in_array($lang, $idiomas))
// $lang = 'es';
// // Cargar textos localizados
// require ("$lang/local.php");

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Lindavista </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <header class="container-fluid lindavista">
    <div class="d-flex container  justify-content-between title">
            <div class="d-flex align-items-center">
                <div class="mr-5">
                    <img src="img/img1.jpg" class="border  icon" alt="imagen1dasa asd asd asd" >
                </div>
                <div class="title-linda">
                    <h1 id="title">Lindavista</h1>
                    <h5 id="subtitle">Construimos un mundo mejor para usted</h5>
                </div>
            </div>
            <div class="d-flex align-items-end">
                <div class="d-flex mr-3">
                <p>[<a onclick="esp()">Español</a>  <img src="img/spain.jpg" alt="" classs="ml-3" style="width:20px;height:15px;">]</p>
                
                </div>
                <div class="d-flex ml-3">
                <p>[<a  onclick="eng()">English</a> <img src="img/england.jpg" alt="" classs="ml-3" style="width:20px;height:15px;">]</p>
                </div>
            </div>
        </div>
    </header>
    <main class="container-fluid row mt-3">
        <section class="col-2  text-center">
            <ul>
                <li><a href="" id="info" >Información</a></li>
                <li><a href="" id="prom">Promociones</a></li>
                <li><a href="" id="serv">Servicios</a></li>
                <li><a href="" id="not">Noticias</a></li>
                <li><a href="" id="cont">Contacto</a></li>
            </ul>
        </section>
        <section class="col-8 notice-content">
            <p class="notice-title" id="notice">Noticias</p>
            <div class="row align-items-center notice-area py-2 justify-content-center">
                <div class="col-7">
                    <div class="">
                        <p class="desc-title" id="date1">16/01/2007 Nueva promoción en la costa</p>
                        <p class="description" id="desc1">
                            Ya están a la venta los apartamentos de la nueva promoción Villa Romana. Situada en primera línea de playa, esta moderna urbanización cuenta con todas las comodidades y una cantidaddes de lujo. Una oportunidad unica de disfrutar de un apartamento en la
                            mejor playa de la costa.
                        </p>
                    </div>
                </div>
                <img src="img/img1.jpg" class="col-3 notice" alt="imagen2 adasdad dsa">
            </div>
            <div class="row align-items-center notice-area mt-3 py-2 justify-content-center">
                <div class="col-7">
                    <div class="">
                        <p class="desc-title" id="date2">19/01/2007 Finalizando la promoción "Nueva Atalaya"</p>
                        <p class="description" id="desc2">
                            Ya se han entregado las llaves a los propietarios de las magníficas viviendas de la promoción Nueva Atalaya.En breve comenzarán las obras de la fase II, para la cual existe una gran expectación.
                        </p>
                    </div>
                </div>
                <img src="img/img1.jpg" class="col-3 notice" alt="imagen3 adsa asda dad da">
            </div>
        </section>
        <section class="col-2 d-flex flex-column align-items-center">
            <img src="img/img1.jpg" class=" photo mb-2" alt="imagen4 adsa asda dad da" longdesc="FAAASDASD adasdsadsadas">
            <img src="img/img1.jpg" class=" photo mb-2" alt="imagen5 adsa asda dad da" longdesc="FAAASDASD dadasdasdasd">
            <img src="img/img1.jpg" class=" photo mb-2" alt="imagen6 adsa asda dad da" longdesc="FAAASD dasdasdas asdasdasdASD">
            <img src="img/img1.jpg" class=" photo mb-2" alt="imagen7 adsa asda dad da">
        </section>
    </main>
    <footer>
        <div class="text-center mt-3 bg-primary p-2" style="font-style: italic; color: #fff;" id="foot">
            Inmobiliaria Lindavista. Construimos un mundo mejor mejor para usted.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function eng(){
            document.getElementById("title").innerHTML="LindaVista"
            document.getElementById("subtitle").innerHTML="We build a better world for you"
            document.getElementById("notice").innerHTML="News"
            document.getElementById("info").innerHTML="Information"
            document.getElementById("prom").innerHTML="Promotion"
            document.getElementById("serv").innerHTML="Services"
            document.getElementById("not").innerHTML="Notices"
            document.getElementById("cont").innerHTML="Contact"            
            document.getElementById("date1").innerHTML="2007/1/16 New development on the coast"
            document.getElementById("desc1").innerHTML="The apartments of the new Villa Romana development are already for sale. Located on the beachfront, this modern urbanization has all the comforts and an amount of luxury. A unique opportunity to enjoy an apartment on the best beach on the coast. "
            document.getElementById("date2").innerHTML="2007/1/19 Finalizing the promotion 'Nueva Atalaya'"
            document.getElementById("desc2").innerHTML="The keys have already been handed over to the owners of the magnificent homes in the Nueva Atalaya development. Work on phase II will begin shortly, for which there is great expectation."
            document.getElementById("foot").innerHTML="Lindavista Real Estate. We build a better world better for you."

        }
        function esp(){
            document.getElementById("title").innerHTML="LindaVista"
            document.getElementById("subtitle").innerHTML="Construimos un mundo mejor para usted"
            document.getElementById("notice").innerHTML="Noticias"
            document.getElementById("info").innerHTML="Información"
            document.getElementById("prom").innerHTML="Promoción"
            document.getElementById("serv").innerHTML="Servicios"
            document.getElementById("not").innerHTML="Noticias"
            document.getElementById("cont").innerHTML="Contactos"
            
            document.getElementById("date1").innerHTML="16/01/2007 Nueva promoción en la costa"
            document.getElementById("desc1").innerHTML="Ya están a la venta los apartamentos de la nueva promoción Villa Romana. Situada en primera línea de playa, esta moderna urbanización cuenta con todas las comodidades y una cantidaddes de lujo. Una oportunidad unica de disfrutar de un apartamento en la mejor playa de la costa. "
            document.getElementById("date2").innerHTML="19/01/2007 Finalizando la promoción 'Nueva Atalaya'"
            document.getElementById("desc2").innerHTML="Ya se han entregado las llaves a los propietarios de las magníficas viviendas de la promoción Nueva Atalaya.En breve comenzarán las obras de la fase II, para la cual existe una gran expectación."
            document.getElementById("foot").innerHTML="Inmobiliaria Lindavista. Construimos un mundo mejor mejor para usted."

        }
    </script>
</body>

</html>