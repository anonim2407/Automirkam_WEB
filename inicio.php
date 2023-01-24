<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Autorentat Exprés - Lavado De Coches en Granollers</title>
  <meta name="description" content="Página principal con algunos de los servicios que ofrecemos">
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <?php
  include 'includes/templates/whatsapp.php'
  ?>
  <header class="header">
    <?php
    include 'includes/templates/header.php'
    ?>
  </header>
  <main>

    <section class="fondo">
      <h1>Dedicamos el tiempo necesario para cada vehiculo</h1>

      <?php
      include 'includes/templates/informacion_esencial.php'
      ?>


    </section>

    <section id="an1" class="contenedor servicios-in barra-fija">
      <div class="descripcion-servicios-in">
        <h4>Servicios de lavado generales</h4>
        <h2>Los <span>mejores</span> servicios para una única experiencia </h2>
        <p>Os ofrecemos una gran variedad de servicios de lavado de vuestro vehículo.
          Estan perfectamente diseñados para que se adapten al presupuesto y a la necesidad
          de cada cliente. Te esperamos en nuestro autolavado en Granollers.</p>
        <a class="boton-verde" href="/servicios.php">Ver todos los servicios</a>
      </div>

      <a class="servicio-vip" href="/includes/templates/servicios/detalle/detalle_vip.php">
        <h2>Lavado VIP</h2>
        <p>Saber más</p>
      </a>



      <a class="servicio-integral" href="/includes/templates/servicios/detalle/detalle_integral.php">
        <h2>Lavados integrales</h2>
        <p>Saber más</p>
      </a>


    </section>





    <section id="an2" class="contenedor servicio-especiales ">
      <h4>Servicios especiales</h4>

      <a id="an3" class="especiales-tapizados" href="/includes/templates/servicios/detalle/detalle_tapizado.php">
        <h2>Tapizados</h2>
        <p>Saber más</p>
      </a>


      <a id="an4" class="especiales-puliment" href="/includes/templates/servicios/detalle/detalle_pulido_faros.php">
        <h2>Pulimento</h2>
        <p>Saber más</p>
      </a>


      <a id="an5" class="especiales-neumaticos" href="/includes/templates/servicios/detalle/detalle_neumaticos.php">
        <h2>Cambio de neumáticos</h2>
        <p>Saber más</p>
      </a>

    </section>


    <!-- <?php
    //include 'includes/templates/formulario.php'
    ?> -->


  </main>

  <?php
  include 'includes/templates/footer.php'
  ?>

  <script src="/src/js/app.js"></script>

  <script src="/src/js/inicio.js"></script>
</body>

</html>