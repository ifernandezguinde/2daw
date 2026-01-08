const PAISES = [
    {nombre: "España", capital: "Madrid", continente: "Europa", moneda: "Euro"},
    {nombre: "Francia", capital: "París", continente: "Europa", moneda: "Euro"},
    {nombre: "Italia", capital: "Roma", continente: "Europa", moneda: "Euro"},
    {nombre: "Alemania", capital: "Berlín", continente: "Europa", moneda: "Euro"},
    {nombre: "Portugal", capital: "Lisboa", continente: "Europa", moneda: "Euro"},
    {nombre: "Marruecos", capital: "Rabat", continente: "África", moneda: "Dírham"}
];

// funcion para contar paises
function contarPaises(a1){
    return a1.length;
}

// funcion para invertir array
function inversa(a1){
    return [...a1].reverse();
}

// funcion para agregar pais
function agregarPais(a1, nuevoPais){
    a1.push(nuevoPais);
    return contarPaises(a1);
}

// funcion para foratear paises
function formatearPaises(a1) {
  return a1.map(
    pais => (
      { nombre: pais.nombre,
        inicial: pais.nombre.charAt(0),
       continente: pais.continente
      }
    )
  );
  
}

// funcion para filtrar paises por continente
function filtrarPaises(a1, continente) {
    return a1.filter(pais => pais.continente === continente);
}

// funcion para buscar pais por moneda
function buscarPorMoneda(a1, moneda) {
    return a1.filter(pais => pais.moneda === moneda).map(pais => pais.nombre);
}

// funcion para encontrar la capital mas larga con un bucle
function capitalMasLarga(a1) {
    let paisGanador = a1[0];
    for (let indice in a1){
        if (a1[indice].capital.length > paisGanador.capital.length){
            paisGanador = a1[indice];
        }
    }
}

// funcion para encontrar la capital mas larga con reduce y devuelve el nombre del pais
function capitalMasLarga2(a1) {
    return a1.reduce((mejor, actual) => {
        return (actual.capital.length > mejor.capital.length) ? actual : mejor;
    }).nombre;
}

console.log(contarPaises(PAISES));
console.log("___");
console.log(inversa(PAISES));
console.log("___");
const nuevoPais = {nombre: "Bélgica", capital: "Bruselas", continente: "Europa", moneda: "Euro"}
console.log(agregarPais(PAISES, nuevoPais));
console.log("___");
console.log(formatearPaises(PAISES));
console.log("___");
console.log(filtrarPaises(PAISES, "Europa"));
console.log("___");
console.log(buscarPorMoneda(PAISES, "Euro"));
console.log("___");
console.log(capitalMasLarga2(PAISES));
console.log("___");


console.log(PAISES);
