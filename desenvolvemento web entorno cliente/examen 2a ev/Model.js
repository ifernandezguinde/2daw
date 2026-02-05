class Model {
    constructor() {
        this.urlBase = "https://fakestoreapi.com/products/";
    }

    async obtenerProducto(nombre) {
        const respuesta = await fetch(`${this.urlBase}/${nombre.toLowerCase()}`);
        if (!respuesta.ok) throw new Error("Producto no encontrado");
        return await respuesta.json();
    }

}