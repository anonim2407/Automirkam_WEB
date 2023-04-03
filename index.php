<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="build/css/app.css" />
  <meta name="description" content="Página de inicio con barra de navegación">
  <title>Autorentat Exprés - Lavado De Coches en Granollers</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NF1Z13V369"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-NF1Z13V369');
  </script>

</head>

<body class="bodyinicio">
  <header class=" header-inicio">
    <div class="contenedor contenido-header mostrar">

      <?php
      include 'includes/templates/header.php'
      ?>

      <div class="herder-texto">
        <h2>
          Damos lo mejor para que vivas una y otra vez una nueva experiencia
          con nuestro servicio
        </h2>
        <a class="boton boton-inicio" href="contacto.php">Contactar ya</a>
      </div>
    </div>
  </header>
</body>

</html>