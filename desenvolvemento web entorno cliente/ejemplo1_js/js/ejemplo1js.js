
function cambiarTexto() {
    console.warn("cambia texto");
    document.getElementById("prueba").innerHTML = "Otro texto";
}

function cambiaTamano(){
    console.warn("cambia tamaño")
    document.getElementById("p1").style.fontSize = "10px";
}

function cambiaImagen(){
    var imagen = document.getElementById("myImg");

    if (imagen.src.match("green")) {
        imagen.src = "http://myfpschool.com/wp-content/uploads/2016/06/myblack.jpeg";
    } else {
    imagen.src = "http://myfpschool.com/wp-content/uploads/2016/06/mygreen.jpeg";
}
}
