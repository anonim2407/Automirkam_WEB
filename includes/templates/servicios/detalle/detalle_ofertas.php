<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../../../build/css/app.css" />
</head>

<body>
    <?php
    include '../../whatsapp.php'
    ?>
    <header class="header">
        <?php
        include '../../header.php'
        ?>
    </header>
    <main class="contenedor">
        <section class="contenido">

            <article class="descripcion">
                <div>
                   
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/lavado_basico.webp" alt="Imagen Ofertas">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Lavado básico (Oferta)</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado exterior, donde no hace falta pedir cita previa y es <span class="negrita">disponible cada martes.</span> 
                            Por los servicios que se ofrecen se ha diseñado un precio bastante económico en
                            el cual nos centramos en limpiar su coche cuidadosamente y dejarlo lo más limpio
                            y brillante posible, tanto por dentro como por fuera. </p>

                        <p>Nuestro lavado básico incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista">Pre lavado con <span class="negrita">pistola de agua a alta presión</span></li>
                            <li class="lista"><span class="negrita">Túnel</span> de lavado</li>
                            <li class="lista"><span class="negrita">Secado</span> en profundidad</li>
                            <li class="lista"><span class="negrita">Aspirado</span> del interior del vehiculo</li>
                            <li class="lista">Limpieza de <span class="negrita">tablero</span></li>

                        </ul>
                        <div>
                            <p class="precio">14.90€ <span>(Coche normal)</span></p>
                        </div>


                        <H2>Lavado completo (Oferta)</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado exterior, donde no hace falta pedir cita previa y es <span class="negrita">disponible cada martes.</span>  
                            Este servicio es el perfecto para aquellas personas que quieren profundizar un 
                            poco mas la limpieza de su vehículo. </p>

                        <p>Nuestro lavado completo incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista"><span class="negrita">Pulverización</span> con desinfectante para carrocería y llantas</li>
                            <li class="lista">Pre lavado con <span class="negrita">químico anti mosquitos</span></li>
                            <li class="lista"><span class="negrita">Limpieza de llantas</span> con químico y agua con alta presión</li>
                            <li class="lista">Pre lavado con <span class="negrita">pistola de agua a alta presión</span></li>
                            <li class="lista"><span class="negrita">Túnel</span> de lavado</li>
                            <li class="lista"><span class="negrita">Secado</span> en profundidad</li>
                            <li class="lista"><span class="negrita">Aspirado profundizado</span> del interior del vehiculo</li>
                            <li class="lista">Limpieza de <span class="negrita">tablero y todos los plásticos</span> del interior</li>
                            <li class="lista"><span class="negrita">Aromatización</span> del interior</li>
                            <li class="lista">Limpieza de todos los <span class="negrita">cristales</span></li>
                        </ul>
                        <div>
                            <p class="precio">24.90€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                  
                </div>

            </article>
        </section>
        <section class="galeria_resultados">
            <h3>Resultados de nuestros servicios</h3>
            <?php
                include '../../galerias_resultados.php'
            ?>
        </section>
    </main>


    <?php
    include '../../footer.php';
    ?>

    <script src="../../../../src/js/app.js"></script>

</body>

</html>