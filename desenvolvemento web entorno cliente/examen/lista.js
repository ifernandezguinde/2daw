/* El primer objetivo es gestionar una lista de países. Para ello, debe comenzar inicializando el sistema declarando una constante llamada PAISES y asignarle un array que contenga al menos seis nombres de países (Ejemplo:  ["España", "Francia", "Italia", "Alemania", "Portugal", "Malta"]) 

A partir de esta lista inicial, implemente una serie de funciones de gestión:

    • Implemente una función contarPaises que nos permita conocer rápidamente la cantidad total de elementos en la lista, devolviendo dicho número. */

const PAISES = ["España", "Francia", "Italia", "Alemania", "Portugal", "Malta"];

function contarPaises() {
    return PAISES.length;
}

/*     • Cree una función inversa que devuelva un nuevo array con la lista de países en orden inverso al original, asegurándose de que el array PAISES no sea modificado. (0,25 pts)

    • Necesitamos una función agregarPais que reciba un nuevo país como parámetro y lo añada al final de la lista; esta función debe retornar la nueva longitud total del array tras la adición. (0,25 pts)

    • Desarrolle una función bajaPais que nos permita eliminar el primer país de la lista por motivos de baja, y que nos devuelva el nombre del país que ha sido eliminado. (0,25 pts) */
function inversa() {
    return [...PAISES].reverse();
}

function agregarPais(nuevoPais) {
    PAISES.push(nuevoPais);
    return PAISES.length;
}

function bajaPais() {
    return PAISES.shift();
}


/* A continuación, utilice los métodos funcionales de JavaScript para transformar y seleccionar datos sin modificar el original:

    • Cree la función formatearPaises(array). Encargada de devolver un nuevo array donde cada nombre de país se haya transformado en un objeto que contenga dos propiedades: nombre (el nombre original del país) y longitud (el número de caracteres de ese nombre). El retorno esperado es un array de objetos, como por ejemplo: [{nombre: "España", longitud: 6}, {nombre: "Francia", longitud: 7}, …]. (0,5 pts)

    • Cree la función filtrarPaises(array). Encargada de devolver un nuevo array que solo contenga aquellos países cuyo nombre comience por una vocal ('A', 'E', 'I', 'O', 'U'), sin distinguir entre mayúsculas y minúsculas. El retorno esperado es un array de cadenas de texto, como por ejemplo: ["España", "Italia", ...]. (0,5 pts) */
function formatearPaises(array) {
    return array.map(pais => ({
        nombre: pais,
        longitud: pais.length
    }));
}

function filtrarPaises(array) {
    const vocales = ['A', 'E', 'I', 'O', 'U'];
    return array.filter(pais => vocales.includes(pais.charAt(0).toUpperCase()));
}

// Ejemplos de uso:
console.log("Cantidad de países:", contarPaises());
console.log("Lista de países en orden inverso:", inversa());
console.log("Nueva longitud tras agregar un país:", agregarPais("Noruega"));
console.log("País eliminado:", bajaPais());
console.log("Países formateados:", formatearPaises(PAISES));
console.log("Países que comienzan con vocal:", filtrarPaises(PAISES));


/* Cree una función llamada bloquearContenido que debe recorrer todo el Árbol del Documento (DOM) desde la etiqueta <body>.

    • Si la función encuentra cualquier elemento de texto que contenga la palabra "sexo" (o alguna palabra clave sensible elegida por el profesor), deberá eliminar ese elemento y sustituirlo por el texto "Contenido Bloqueado" escrito en negrita. (1 pto)

    • En caso de que encuentre la palabra "Examen", deberá emitir una alerta con el mensaje "¡DETECTADO!" y, además, escribir en la consola del navegador el elemento contenedor (node) de la palabra "Examen". (0,5 pts)
      
    • NOTA: Toda la estructura de la página debe generarse desde JavaScript utilizando métodos como document.createElement() y appendChild(). */
function bloquearContenido() {
    function recorrerNodos(nodo) {
        nodo.childNodes.forEach(child => {
            if (child.nodeType === Node.TEXT_NODE) {
                const texto = child.textContent.toLowerCase();
                if (texto.includes("sexo")) {
                    const nuevoNodo = document.createElement("strong");
                    nuevoNodo.textContent = "Contenido Bloqueado";
                    nodo.replaceChild(nuevoNodo, child);
                } else if (texto.includes("examen")) {
                    alert("¡DETECTADO!");
                    console.log("Elemento contenedor:", nodo);
                }
            } else {
                recorrerNodos(child);
            }
        });
    }
    recorrerNodos(document.body);
}