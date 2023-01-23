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
                    <a class="flecha" href="../detalle/detalle_asientosCompl.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/lavado_integral_inicio.webp" alt="Imagen Lavado Integral">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Lavado integral</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado interior e exterior, donde <span class="negrita">hace falta pedir cita previa.</span> 
                            Este servicio esta destinado a esas personas que quieren dejar su vehiculo impecable.
                             Este el mejor servicios de limpieza que os podemos ofrecer con un precio imprecionante.</p>

                        <p>Nuestro lavado integral incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista">Aspiracion en profundidad</li>
                            <li class="lista">Limpieza de tapisería de todos los asientos</li>
                            <li class="lista">Limpieza de tapisería de todas las puertas</li>
                            <li class="lista">Limpieza de tapisería de la moqueta y las alfombillas</li>
                            <li class="lista">Limpieza del tablero y todos los plasticos del interior</li>
                            <li class="lista">Desinfección y eliminación de olores con tecnologia especial</li>
                            <li class="lista"><span class="negrita">Pulverización</span> con desinfectante para carrocería y llantas</li>
                            <li class="lista"><span class="negrita">Lavado de motor</span></li>
                            <li class="lista">Pre lavado con <span class="negrita">químico anti mosquitos</span></li>
                            <li class="lista"><span class="negrita">Limpieza de llantas a mano</span> con químico y agua con alta presión</li>
                            <li class="lista">Pre lavado con <span class="negrita">pistola de agua a alta presión</span></li>
                            <li class="lista"><span class="negrita">Túnel</span> de lavado modo "Extra"</li>
                            <li class="lista"><span class="negrita">Secado</span> en profundidad</li>
                            <li class="lista">Cera protectora para los neumáticos</li>

                        </ul>
                        <div>
                            <p class="precio">139€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_tapizado.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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