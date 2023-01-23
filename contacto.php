<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Metodos de contacto">
  <title>Autorentat Exprés - Contacto</title>
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
    <section class="header-nosotros">
      <h1>Contacto</h1>
    </section>



    <div class="contenedor informacion-esencial">
      <a href="tel:+34643704782">
        <p class="telefono">643 70 47 82</p>
      </a>
      <a class="correo" href="mailto:automirkam@yahoo.es">
        <p>automirkam@yahoo.es</p>
      </a>
    </div>
  </main>

  <?php
  include 'includes/templates/footer.php';
  ?>

  <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>