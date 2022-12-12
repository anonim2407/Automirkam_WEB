document.addEventListener('DOMContentLoaded', function () {
    animacionScroll2();
});
function animacionScroll2() {

    const ap1 = document.getElementById('an1');
    const ap2 = document.getElementById('an2');
    const ap3 = document.getElementById('an3');
    const ap4 = document.getElementById('an4');
    const ap5 = document.getElementById('an5');

    const cargarApartados = (entradas, observador) => {
        entradas.forEach((entrada) => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('visible');
            } else {
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
}




