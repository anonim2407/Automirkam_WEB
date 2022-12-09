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
                    <a class="flecha" href="../detalle/detalle_completo.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/lavado_vip.webp" alt="Imagen Lavado Basico">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Lavado VIP</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado exterior e interior, donde no hace falta pedir cita previa.
                            En este os ofrecemos una limpieza muy profundizada, dónde limpiamos detalladamente cada
                            parte de su vehículo tanto por dentro como por fuera</p>

                        <p>Nuestro lavado VIP incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista"><span class="negrita">Pulverización</span> con desinfectante para carrocería y llantas</li>
                            <li class="lista">Pre lavado con <span class="negrita">químico anti mosquitos</span></li>
                            <li class="lista"><span class="negrita">Limpieza de llantas</span> con químico y agua con alta presión</li>
                            <li class="lista">Pre lavado con <span class="negrita">pistola de agua a alta presión</span></li>
                            <li class="lista"><span class="negrita">Túnel</span> de lavado modo "Extra"</li>
                            <li class="lista"><span class="negrita">Secado</span> en profundidad</li>
                            <li class="lista"><span class="negrita">Doble aspirado profundizado</span> del interior del vehiculo </li>

                            <li class="lista">Limpieza de <span class="negrita">tablero y todos los plásticos</span> del interior con <span class="negrita">pistolas de alta presión</span></li>
                            <li class="lista">Lavado de <span class="negrita">alfombras</span></li>
                            <li class="lista">Limpieza de todos los <span class="negrita">cristales</span></li>
                            <li class="lista"><span class="negrita">Cera de neumáticos</span> especial para evitar el agrietado</li>
                            <li class="lista"><span class="negrita">Aromatización</span> del interior</li>

                        </ul>
                        <div>
                            <p class="precio">39€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_asientos.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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