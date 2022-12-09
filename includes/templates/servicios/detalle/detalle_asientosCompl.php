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
                    <a class="flecha" href="../detalle/detalle_asientos.php"><img src="/build/img/arrow_left.png" alt="Flecha retroceder"></a>
                </div>
                <div class="descripcion-contenido">
                    <div>
                        <img src="/build/img/lavado_asientos.webp" alt="Imagen Lavado Aientos mas Completo">
                        <a class="volver" href="/servicios.php">↪ Volver a servicios</a>
                    </div>

                    <div class="descripcion-servicio">
                        <H2>Lavado de tapicería + Completo</H2>
                        <hr>
                        <p>Este servicio ofrece un lavado exterior e interior , dónde <span class="negrita">hace falta pedir cita previa.</span>  
                            En este os ofrecemos una un lavado de todos los asientos de vuestro vehículo, 
                            dónde quitaremos al 100% las manchas y los olores incrustados en sus asientos. 
                            Al final hacemos una limpieza completa para acabar de dejar el coche en un estado brillante como todos deseamos.
                        </p>

                        <p>Nuestro lavado de asientos incluye los siguientes productos y servicios:</p>
                        <ul>
                            <li class="lista"><span class="negrita">Aspirado</span> de todos los asientos</li>
                            <li class="lista"><span class="negrita">Lavado de los asientos </span></li>
                            <li class="lista"><span class="negrita">Secado</span> con maquinaria especial</li>
                            <li class="lista"><a href="/includes/templates/servicios/detalle/detalle_completo.php">Lavado completo (Abrir para más detalle)</a></li>
                        </ul>
                        <div>
                            <p class="precio">89.99€ <span>(Coche normal)</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="flecha" href="../detalle/detalle_integral.php"><img src="/build/img/arrow_right.png" alt="Flecha avansar"></a>
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