const PAISES = ["España", "Francia", "Italia", "Alemania", "Portugal", "Malta"];

function contarPaises() {
    let paises = 0;
    PAISES.forEach(pais => {
        paises++;
    });
    console.log(paises);
    return paises;
}

