/* Usted deberá añadir el código JavaScript necesario para implementar las siguientes funcionalidades:

    • Funcionalidad del Botón "Añadir fila": Implemente la función agregarFila de modo que, al pulsarse, tome el contenido del campo de texto y lo añada como una nueva fila a la tabla, incluyendo su respectivo botón de "Caniar" que apunte a la nueva celda. Toda la estructura de la página debe generarse desde JavaScript utilizando métodos como document.createElement() y appendChild(). (1 pto) 

    • Evento Mouseover: Implemente la lógica para que, al pasar el ratón por encima de cualquier celda de la tabla, el color de fondo de esa celda cambie (por ejemplo, a gris claro), volviendo a la normalidad al retirar el ratón. (1 pto)

    • Función de Transformación: Cree la función toCani(cadena). Esta función debe recibir una cadena de texto y devolverla transformada bajo las siguientes reglas "Cani": (2 ptos)
        ◦ Alternancia: Alternar el uso de MAYÚSCULAS y minúsculas.
        ◦ Sustituciones fonéticas: Sustituir la letra C por la K. Se valorará el uso de expresiones regulares para sustituir las secuencias "ca", "co", "cu" por "ka", "ko", "ku" (pero no "ce", "ci").
        ◦ Sustituciones compuestas: Sustituir todas las ocurrencias de "qu" por "k" y todas las "ch" por "x".
        ◦ Añadido final: Añadir tres letras H al final de la cadena resultante.
        ◦ Por ejemplo, si le pasamos a la función la cadena "una cadena cani es como esta" obtendremos "UnA KaDeNa kAnI Es kOmO EsTaHHH".  */
function agregarFila() {
    const tabla = document.getElementById("miTabla");
    const textoInput = document.getElementById("textoInput").value;

    const nuevaFila = document.createElement("tr");
    const nuevaCelda = document.createElement("td");
    nuevaCelda.textContent = textoInput;

    // Añadir evento mouseover
    nuevaCelda.addEventListener("mouseover", function() {
        this.style.backgroundColor = "lightgray";
    });
    nuevaCelda.addEventListener("mouseout", function() {
        this.style.backgroundColor = "";
    });

    const botonCaniar = document.createElement("button");
    botonCaniar.textContent = "Caniar";
    botonCaniar.addEventListener("click", function() {
        nuevaCelda.textContent = toCani(nuevaCelda.textContent);
    });

    const celdaBoton = document.createElement("td");
    celdaBoton.appendChild(botonCaniar);

    nuevaFila.appendChild(nuevaCelda);
    nuevaFila.appendChild(celdaBoton);
    tabla.appendChild(nuevaFila);
}

function toCani(cadena) {
    let resultado = "";
    let mayuscula = true;

    const sustituciones = {
        "ch": "x",
        "qu": "k",
        "ca": "ka",
        "co": "ko",
        "cu": "ku",
        "c": "k"
    };

    // Realizar sustituciones fonéticas
    for (const [key, value] of Object.entries(sustituciones)) {
        const regex = new RegExp(key, 'gi');
        cadena = cadena.replace(regex, value);
    }

    // Alternar mayúsculas y minúsculas
    for (let char of cadena) {
        if (char.match(/[a-zA-Z]/)) {
            resultado += mayuscula ? char.toUpperCase() : char.toLowerCase();
            mayuscula = !mayuscula;
        } else {
            resultado += char;
        }
    }

    return resultado + "HHH";
}

/* A continuación, considere el siguiente array de países: */
const PAISES = ["España", "Francia", "Italia", "Alemania", "Portugal", "Argentina", "Uruguay", "Ecuador", "Colombia", "Venezuela"];

/* Cree las siguientes funciones para manipular este array sin modificar el original: