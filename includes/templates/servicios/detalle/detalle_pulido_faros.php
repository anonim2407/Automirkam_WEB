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
                    <a class="flecha" href="../detalle/detalle_tapizado.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/pulimento_inicio.webp" alt="Imagen Pulimento Faros">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Restauración de faros</H2>
                        <hr>
                        <p>Nuevo proceso de restauración de faros con <span class="negrita">polímetro evaporado.</span> 
                            La restauración de faros basado en un polímero líquido vaporizado.
                            Se trata de un sistema que permite devolver la transparencia y el
                            brillo a los faros quemados por el sol de forma rápida y económica.</p>
                        <p>El nuevo proceso de restasuración ofrece a los faros un mejor acabado
                            final y una reducción de tiempo en el proceso de pulido. Además, el polímero
                            protege el policarbonato del faro frente a la radiación solar ultravioleta.
                            Está especialmente indicado para restaurar las superficies amarillentas,
                            matizadas o con arañazos en la capa externa de los faros de policarbonato
                            empleados en automoción.</p>

                        <div>
                            <p class="precio">25€ <span>(Por faro)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_pulido_pintura.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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