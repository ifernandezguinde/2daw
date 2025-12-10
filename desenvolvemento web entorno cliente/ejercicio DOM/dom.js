document.addEventListener("DOMContentLoaded", () => {
    // =================================================================
    // 1. Contenido y Atributos
    // =================================================================
    window.cambiarContenido = function() {
        const parrafo = document.getElementById("parrafo-contenido");
        parrafo.textContent = "¡El DOM ha manipulado este texto correctamente!";
    }

    window.cambiarAtributo = function() {
        const imagen = document.getElementById("imagen-dom");
        imagen.setAttribute('src', 'https://via.placeholder.com/150/e74c3c/FFFFFF?Text=Cambiado');
        imagen.setAttribute('alt', 'Nueva imagen DOM');
        imagen.setAttribute('title', 'Imagen cambiada por el DOM');
    }

    // =================================================================
    // 2. Estilos y Clases
    // =================================================================
    window.cambiarFondo = function() {
        const caja = document.getElementById("caja-estilo");
        caja.style.backgroundColor = "purple";
        caja.style.border = "4px dashed orange";
    }

    window.aplicarClase = function() {
        const parrafo = document.getElementById("parrafo-contenido");
        parrafo.classList.toggle('resaltado');
    }

    // =================================================================
    // 3. Eventos y Creación de Nodos
    // =================================================================
    const botonEvento = document.getElementById("boton-evento");
    botonEvento.addEventListener('click', () => {
        console.log('Evento DOM capturado: El usuario hizo clic en el botón.');
        botonEvento.textContent = '¡Clic detectado!';
    });

    window.crearNuevoElemento = function() {
        const nuevoParrafo = document.createElement('p');
        nuevoParrafo.textContent = `Elemento creado y añadido al DOM. (${new Date().toLocaleTimeString()})`;
        const contenedor = document.getElementById("contenedor-nodos");
        contenedor.appendChild(nuevoParrafo);
    }
});
