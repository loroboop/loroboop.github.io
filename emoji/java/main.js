//Funciones para la barra de búsqueda - CATÁLOGO

function evento1() {
    alert('Ingresa el libro que quieres leer y este en el catálogo');
}

const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app, {
    loop: true,
    delay: 75
});

typewriter
    .typeString('La libreria moderna')
    .pauseFor(200)
    .start();