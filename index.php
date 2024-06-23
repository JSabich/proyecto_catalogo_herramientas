<?php
echo "<h1>Hola mundo !!!!!</h1>";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Herramientas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <script src="https://kit.fontawesome.com/35835e09d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header class="headerIndex">
        <section class="navYRedes">

            <nav class="navMenu">
                <ul class="menu">
                    <li>
                        <a href="#">INICIO</a>
                    </li>

                    <li>
                        <a href="./pages/descripcion_proyecto.php">PROYECTOS</a>
                    </li>

                    <li>
                        <a href="./pages/registrarse.php">REGISTRO</a>
                    </li>

                    <li>
                        <a href="./pages/administrador.php">ADMINISTRADOR</a>
                    </li>

                </ul>

            </nav>

            <nav class="navRedes">
                <ul class=redes>
                    <li>
                        <a href="./pages/iniciar_sesion.php">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>

                </ul>

            </nav>

        </section>

    </header>
    <section class="logoYBuscador">

        <div>

            <a href="#">
                <img class="animate__animated animate__rubberBand" id="logo" src="./assets/img/logo2.png" alt="Logo de HerraMaq mostrando una mano con herramienta" width="120" loading="lazy">
            </a>

            <div class="nombreEmpresa">
                <h2>
                    HerraMaq
                </h2>
                <h4>
                    Te damos soluciones
                </h4>
            </div>

        </div>

        <div class="buscador">
            <h4>¿Qué estás buscando?</h4>
            <div class="botonBuscar">
                <form action="/my-handling-form-page">
                    <input size="25" type="text" placeholder="Tu próxima herramienta" id="buscar" name="buscar" required>
                    <input type="submit" value="Buscar" id="btnBuscar" name="btnBuscar">
                </form>
            </div>
        </div>

    </section>

    <main id="main">

   <h2> <?php
// Código PHP aquí
$moneda=array("argentina"=> "Peso","francia" => "Euro","usa" => "Dolar");
echo" ".$moneda["argentina"]."<br>".$moneda["francia"]."<br>".$moneda["usa"]
?></h2>
        <section class="principal">
            <h1>
                Máquinas y herramientas
            </h1>

            <h2>
                Para el hogar y la industria
            </h2>

        </section>

        <section class="proyectos">
            <h2>
                Te acompañamos en tus proyectos
            </h2>
            <div class="herramientasProyectos">
                <div>
                    <a href="./pages/descripcion_proyecto.php">
                        <img src="./assets/img/Proyectos/Albañileria/albañileria.jpg" alt="imagen de herramientas eléctricas">
                    </a>
                    <h3>
                        Albañilería
                    </h3>
                </div>

                <div>
                    <a href="#">
                        <img src="./assets/img/Proyectos/Pintura/pintura.jpg" alt="imagen de herramientas manuales">
                    </a>
                    <h3>
                        Pintura
                    </h3>
                </div>

                <div>
                    <a href="./pages/descripcion.php">
                        <img src="./assets/img/Proyectos/Soldador/soldador.jpg" alt="imagen de herramientas de jardín">
                    </a>

                    <h3>Todo para el soldador</h3>
                </div>

                <div>
                    <a href="./pages/descripcion.php">
                        <img src="./assets/img/Proyectos/Jardin/jardineria.webp" alt="imagen de herramientas de jardín">
                    </a>

                    <h3>Jardinería</h3>
                </div>
                <div>
                    <a href="./pages/descripcion.html">
                        <img src="./assets/img/Proyectos/Plomeria/plomeria.jpg" alt="imagen de herramientas de jardín">
                    </a>

                    <h3>Plomería</h3>
                </div>
                <div>
                    <a href="./pages/descripcion.php">
                        <img src="./assets/img/Proyectos/Carpinteria_en_madera/carpinteria.jpg" alt="imagen de herramientas de jardín">
                    </a>

                    <h3>Carpintería en madera</h3>
                </div>

                <div>
                    <a href="./pages/descripcion.php">
                        <img src="./assets/img/Proyectos/Instalaciones eléctricas/instalaciones_electricas.jpg" alt="imagen de herramientas de jardín">
                    </a>

                    <h3>Instalaciones eléctricas</h3>
                </div>

                <div>
                    <a href="./pages/descripcion.php">
                        <img src="./assets/img/Proyectos/Construccion_en_seco/placas.jpeg" alt="imagen con herramientas utilizadas en la construcción en seco">
                    </a>
                    <h3>Construcción en seco</h3>
                </div>
            </div>
            <div class="contenedorBotones">
                <div class="button">
                    <button>Anterior</button>
                    <button>Siguiente</button>
                </div>
            </div>
            <hr>
           <?php echo "Hola, mundo!"; ?>
        </section>

        <section class="loMasBuscado">
            <h2>
                Lo más buscado
            </h2>
            <div class="buscados">
                <div>
                    <!--Estoy dirigiendo a un punto específico pero fuera de la página  -->
                    <a href="./pages/descripcion_herramientas_electricas.html#amoladoras">
                        <img src="./assets/img/Lo_mas_buscado/amoladora.jpg" alt="amoladora cortando metal y largando chispas">
                    </a>
                    <h3>
                        Amoladora angular
                    </h3>
                </div>

                <div>
                    <a href="#">
                        <img src="./assets/img/Lo_mas_buscado/pintura_latex.jpg" alt="mano utilizando un taladro a batería">
                    </a>
                    <h3>
                        Pintura Latex
                    </h3>
                </div>

                <div>
                    <a href="">
                        <img src="./assets/img/Lo_mas_buscado/caladora.jpg" alt="tenaza">
                    </a>
                    <h3>
                        Caladora
                    </h3>
                </div>

                <div>
                    <a href="">
                        <img src="./assets/img/Lo_mas_buscado/llaves_fijas.jpg" alt="Martillo saca clavos">
                    </a>

                    <h3>
                        LLaves fijas
                    </h3>
                </div>


                <div>
                    <!--Estoy dirigiendo a un punto específico pero fuera de la página  -->
                    <a href="#">

                        <img src="./assets/img/Lo_mas_buscado/escalera_por_tramos.jpeg" alt="escalera por tramos">
                    </a>

                    <h3>
                        Escalera por tramos
                    </h3>
                </div>

                <div>
                    <a href="#">
                        <img src="./assets/img/Lo_mas_buscado/taladro_a_bateria.jpg" alt="mano utilizando un taladro a batería">
                    </a>
                    <h3>
                        Taladro a batería
                    </h3>
                </div>

                <div>
                    <a href="#">
                        <img src="./assets/img/Lo_mas_buscado/llaves_termicas.jpg" alt="tenaza">
                    </a>
                    <h3>
                        LLaves Térmicas
                    </h3>
                </div>

                <div>
                    <a href="#">
                        <img src="./assets/img/Lo_mas_buscado/cortadora_de_cesped.jpg" alt="Martillo saca clavos">
                    </a>

                    <h3>
                        Cortadora de Césped
                    </h3>
                </div>

            </div>

        </section>

    </main>

    <footer class="footer">
        <section class="footerTextos">
            <a href="#">
                <h4>
                    Términos y condiciones
                </h4>
            </a>

            <a href="#">
                <h4>
                    Preguntas frecuentes
                </h4>
            </a>

            <a href="#">
                <h4>
                    Contacto
                </h4>
            </a>
        </section>

        <section class="pagoEnvioDataFiscal">
            <div class="formasDePago">
                <h4>Formas de Pago</h4>

                <img src="./assets/img/Footer/formas_de_pago.png" alt="imagen informando las formas de pago">

            </div>

            <div class="envios">
                <h4>Envíos</h4>
                <img src="./assets/img/Footer/envio_a_toda_argentina.jpeg" alt="imagen informando que se hacen envíos a todo el país">
            </div>

            <div class="dataFiscal">
                <h4>Data Fiscal</h4>
                <a href="#">
                    <img src="./assets/img/Footer/data_fiscal.png" alt="imagen que direcciona a los datos fiscales">
                </a>
            </div>

        </section>

        <section class=footerUbicacion>
            <h4>¿Dónde estamos?</h4>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/d/embed?mid=1z77xl_T61NmL97hotC9ubs0f8Ss&hl=en_US&ehbc=2E312F" width="128" height="128"></iframe>
            </div>
        </section>

        <a href="">
            <i class="fa-brands fa-square-whatsapp"></i>
        </a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>