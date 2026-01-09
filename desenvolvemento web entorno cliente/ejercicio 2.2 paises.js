const PAISES = [
    {nombre: "España", capital: "Madrid", continente: "Europa", moneda: "Euro"},
    {nombre: "Francia", capital: "París", continente: "Europa", moneda: "Euro"},
    {nombre: "Italia", capital: "Roma", continente: "Europa", moneda: "Euro"},
    {nombre: "Alemania", capital: "Berlín", continente: "Europa", moneda: "Euro"},
    {nombre: "Portugal", capital: "Lisboa", continente: "Europa", moneda: "Euro"},
    {nombre: "Marruecos", capital: "Rabat", continente: "África", moneda: "Dírham"}
];


function resumenPaises(a1) {
    return a1.map( pais => {
        return {
            codigo: pais.nombre.toUpperCase().substring(0,3),
            info: `${pais.nombre} (${pais.capital})`,
            tieneEuro: pais.moneda === "Euro"
        };
    }   
    );
}


const criterios = {
  continente: "Europa",
  minLetrasCapital: 5,
  moneda: "Euro"
};


function filtrarPorCriterios(array, criterios) {
    return array.filter( pais => {
        if (criterios.continente && (criterios.continente !== pais.continente))
            return false;
        if (criterios.minLetrasCapital && (criterios.minLetrasCapital > pais.capital.length))
            return false;
        if (criterios.moneda && (criterios.moneda !== pais.moneda))
            return false;
        return true;
    });
}



function estadisticasContinentes(a1) {
    return a1.reduce( (valor, pais) => {
        const propiedad = pais.continente;
        if (!valor[propiedad]){
            valor[propiedad] = {
                total: 0,
                monedas: [],
                paises: []
            };
        }
        valor[propiedad].total++;
        if (valor[propiedad].monedas.includes(pais.moneda)){
            valor[propiedad].monedas.push(pais.moneda);
        }
        if (valor[propiedad].paises.includes(pais.nombre)){
            valor[propiedad].paises.push(pais.nombre);
        }

        return valor;
    }, {} 
    );
}


function informeCapitales(a1) {
    return a1.filter(pais => pais.capital.length > 4).sort((paisA, paisB) => paisA.nombre.localeCompare(paisB.nombre))
    .map(pais => `La capital de ${pais.nombre} es ${pais.capital} y tiene ${pais.capital.length} letras.`);
}





console.log(resumenPaises(PAISES));
console.log("___");

console.log( filtrarPorCriterios(PAISES, criterios) );
console.log("___");

console.log( estadisticasContinentes(PAISES) );
console.log("___");

console.log( informeCapitales(PAISES) );
console.log("___");