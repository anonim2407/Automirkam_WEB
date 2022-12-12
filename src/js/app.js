document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();
});

function iniciarApp() {
    eventListeners();
    navegacionFija();
    scrollNav();
    animacionScroll();

}

function navegacionFija() {
    const barra = document.querySelector('.header')
    const serviciosIn = document.querySelector('.barra-fija');
    const body = document.querySelector('body')

    window.addEventListener('scroll', function () {
        if (serviciosIn.getBoundingClientRect().top < 0) {
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
        } else {
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
        }
    })
}



function scrollNav() { //cuando le demos click al la navegacion nos lleva a ese apartado deslizandose por la pagina
    const enlaces = document.querySelectorAll('.navegacion_servicios')
    enlaces.forEach(enlace => {
        enlace.addEventListener('click', function (e) {
            e.preventDefault();


            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({ behavior: "smooth" });
        });
    });
}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}

function animacionScroll() {
    const ap1 = document.getElementById('lavado');
    const ap2 = document.getElementById('integrales');
    const ap3 = document.getElementById('especiales');
    const ap4 = document.getElementById('ofertas');
    const ap5 = document.getElementById('ofertas2')
    const ap6 = document.getElementById('imagen_galeria')
    
    const cargarApartados = (entradas, observador) => {
        entradas.forEach((entrada) => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('visible');
            }else{
                entrada.target.classList.remove('visible');
            }
        });
    }
    const observador = new IntersectionObserver(cargarApartados, {
        root: null,
        rootMargin: '-150px 0px 0px 0px',
        threshold: 0.1 //para regular cuando aparezca la imagen
    });

    observador.observe(ap1);
    observador.observe(ap2);
    observador.observe(ap3);
    observador.observe(ap4);
    observador.observe(ap5);
    observador.observe(ap6);
}





