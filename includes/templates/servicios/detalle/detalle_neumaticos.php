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
                    <a class="flecha" href="../detalle/detalle_pulido_pintura.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/neumaticos_inicio.webp" alt="Imagen Lavado Basico">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Cambio de neumáticos</H2>
                        <hr>
                        <p>El montaje de neumáticos es un servicio muy importante que se debe realizar correctamente y por profesionales
                            con las máquinas adecuadas ya que es primordial para la seguridad del vehículo.</p>

                        <p> Para realizar un correcto y completo montaje del neumático, siempre se tiene que
                            hacer un equilibrado preciso del neumático para evitar vibraciones al circular
                            (las vibraciones disminuyen el contacto con la carretera pudiendo provocar un
                            accidente), poner una nueva válvula de inflado para evitar perdidas de aire por
                            el deterioro que pueda haber sufrido la anterior, y realizar la comprobación de
                            la presión del aire según lo que marque el vehículo para inflarlos con lo establecido
                            por el fabricante del vehículo.</p>

                        <div>
                            <p class="precio">15€<span>(Por rueda)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_itv.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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