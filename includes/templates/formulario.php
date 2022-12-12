<section class="inicio-inferior">
    <h2>¿Tienes alguna duda?</h2>
    <p>Rellena el cuestionario y la solucionaremos en un instante</p>
    <form class="formulario contenedor" id="form">
        <fieldset>
            <legend>Información personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre" name="nombre" />

            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Tu Apellido" id="apellido" name="apellido" />

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu teléfono" id="telefono" name="telefono" />

            <label for="email">E-mial</label>
            <input type="email" placeholder="Tu correo electronico" id="email" name="email" />
        </fieldset>

        <fieldset>
            <legend>¿Como desea ser contactado?</legend>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono" name="contacto" />

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email" name="contacto" />
            </div>
        </fieldset>
        <fieldset>
            <legend>¿Que desea saber?</legend>
            <textarea id="mensaje" placeholder="Describe tu duda aquí" cols="30" rows="10" name="mensaje"></textarea>
        </fieldset>
        <button type="submit" id="button" value="Enviar" class="boton-enviar">
            <span class="text">Enviar</span>
            <img class="icons" src="/build/img/tick.svg" alt="">
        </button>
       
    </form>

    <div class="contenedor informacion-esencial">
        <a href="tel:+34643704782">
            <p class="telefono">643 70 47 82</p>
        </a>
        <a class="correo" href="mailto:automirkam@yahoo.es">
            <p>automirkam@yahoo.es</p>
        </a>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
    emailjs.init('MmCJ5RZxwPk3aX7kk')
</script>

<script>
    const btn = document.getElementById("button");

    document
        .getElementById("form")
        .addEventListener("submit", function(event) {
            event.preventDefault();

            btn.value = "Enviando...";

            const serviceID = "default_service";
            const templateID = "template_kigbiz4";

            emailjs.sendForm(serviceID, templateID, this).then(
                () => {
                    btn.value = "Enviar";
                    alert("Enviado!");
                },
                (err) => {
                    btn.value = "ERROR";
                    alert(JSON.stringify(err));
                }
            );
        });
</script>