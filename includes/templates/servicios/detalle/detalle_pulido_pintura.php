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
                        <p>Este servicio ofrece un pulido completo de su vehículo, donde <span class="negrita">hace falta pedir cita previa.</span>
                            Consiste en remover un mínimo de espesor en la pintura del vehículo, para eliminar rallas, defectos e
                            imperfecciones a fondo, dejando una superficie limpia y pareja. Es ideal para eliminar cera antigua,
                            arañazos e imperfecciones en la pintura del coche, y el resultado es una capa de pintura ideal, rejuvenecida
                            y brillante como si se tratara de un coche nuevo.
                        </p>
                        <p>El pulido se realiza con una máquina especial y esponjas de diversos grosores que van esparciendo el producto 
                            sobre la superficie del vehículo hasta lograr el acabado deseado, normalmente en tres etapas. Una vez que 
                            obtenemos el pulido ideal el vehículo lucirá como nuevo.</p>
                        <div>
                            <p class="precio">150€ <span>(Coche normal)</span></p>
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