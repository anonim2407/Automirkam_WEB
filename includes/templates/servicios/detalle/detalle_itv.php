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
                    <a class="flecha" href="../detalle/detalle_neumaticos.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/preparacion_ITV.webp" alt="Imagen Lavado Basico">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Preparación ITV</H2>
                        <hr>
                        <p>Este servicio ofrece una inspección completa de su vehículo con el fin de tener éxito en la ITV y evitar problemas.</p>

                        <p>En esta revición se inspeccionaran los siguientes sistemas y elementos del coche:</p>
                        <ul>
                            <li class="lista">Los frenos</li>
                            <li class="lista">Las luces</li>
                            <li class="lista">Las ruedas</li>
                            <li class="lista">El sistema de gases y emiciones</li>
                            <li class="lista">El aceite del motor</li>
                        </ul>
                        <div>
                            <p class="precio">30€ <span>(Coche normal)</span></p>
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