// =======================================================
// CONSTANTES
// =======================================================

const API_URL = 'https://api.imdbapi.dev/titles?types=MOVIE&startYear=2025';
const catalogoDiv = document.getElementById('catalogo');


// =======================================================
// PARTE 1: OBTENER DATOS (FETCH)
// =======================================================

async function obtenerDatosPeliculas() {
    try {
        const respuesta = await fetch(API_URL);

        if (!respuesta.ok) {
            throw new Error(`Error HTTP: ${respuesta.status}`);
        }

        const datos = await respuesta.json();
        return datos.titles || [];

    } catch (error) {
        console.error('Error en obtenerDatosPeliculas():', error);
        throw error;
    }
}


// =======================================================
// PARTE 2: MOSTRAR DATOS (DOM)
// =======================================================

function mostrarPeliculas(peliculas) {

    catalogoDiv.innerHTML = '';

    if (peliculas.length === 0) {
        catalogoDiv.innerHTML = '<p>No se encontraron películas.</p>';
        return;
    }

    peliculas.forEach(pelicula => {
        const tarjeta = document.createElement('div');
        tarjeta.classList.add('pelicula-card');

        // =============================
        // Extracción segura de datos
        // =============================
        const titulo = pelicula.primaryTitle || "Título no disponible";
        const año = pelicula.startYear || "N/A";
        const poster = pelicula.primaryImage?.url || "https://via.placeholder.com/100x150?text=Sin+Imagen";

        const generos = Array.isArray(pelicula.genres)
            ? pelicula.genres.join(", ")
            : "Sin género";

        const rating = pelicula.rating?.aggregateRating || "Sin puntuación";
        const resumen = pelicula.plot || "Sin descripción disponible";

        // =============================
        // Construcción del HTML
        // (idéntico a tu imagen de ejemplo)
        // =============================
        tarjeta.innerHTML = `
            <img class="poster" src="${poster}" alt="Póster de ${titulo}">
            <div class="info">
                <h3>${titulo} (${año})</h3>

                <p><strong>Géneros:</strong> ${generos}</p>

                <p><strong>Puntuación:</strong> ⭐ ${rating}</p>

                <p class="plot">${resumen}</p>
            </div>
        `;

        catalogoDiv.appendChild(tarjeta);
    });
}


// =======================================================
// PARTE 3: INICIALIZACIÓN
// =======================================================

async function iniciarCatalogo() {
    catalogoDiv.innerHTML = '<h2>Cargando películas...</h2>';

    try {
        const peliculas = await obtenerDatosPeliculas();
        mostrarPeliculas(peliculas);

    } catch (error) {
        catalogoDiv.innerHTML = `
            <h2>❌ Error al cargar los datos:</h2>
            <p>${error.message}</p>
        `;
    }
}

iniciarCatalogo();
