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
                    <a class="flecha" href="../detalle/detalle_integral.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/tapizados_inicio2.webp" alt="Imagen Lavado Basico">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Tapizado</H2>
                        <hr>
                        <p>¿Tienes un techo descolgado o caído de su coche y no sabes que hacer? En Autolavado Expres nos ocupamos de dejarlo como nuevo.
                            Para este tipo de servicio es necesaria cita previa
                        <div>
                            <p class="precio">120€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_pulido_faros.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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