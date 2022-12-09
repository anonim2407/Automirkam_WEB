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
                    <a class="flecha" href="../detalle/detalle_pulido_faros.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/pulimento_coches_inicio.webp" alt="Imagen Lavado Basico">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Pulido de pintura</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado exterior, donde no hace falta pedir cita previa.
                            Por los servicios que se ofrecen se ha deseñado un precio muy económico en el qual
                            nos centramos en limpiar su coche cuidadosamente y dejarlo lo mas limpio
                            y brillante posible tanto por fuera como por dentro</p>

                        <p>Nuestro lavado básico incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista">Pulverización con desinfectante para carrocería y llantas.</li>
                            <li class="lista">Pre lavado con químico anti mosquitos.</li>
                            <li class="lista">Pre lavado con pistola de agua a alta presión.</li>
                            <li class="lista">Aspirado del suelo y los asientos</li>
                            <li class="lista">Limpieza del tablero</li>
                        </ul>
                        <div>
                            <p class="precio">140€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_neumaticos.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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