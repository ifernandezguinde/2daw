class Controller {
    constructor (model, view) {
        this.model = model;
        this.view = view;
    
        this.view.btn-open-modal.addEventListener('click', () => this.limpiarCampos())
    
        this.view.
    }
    
    async init() {

    }

    async ejecutarBusqueda() {
        const nombre = this.view.input.value;
        if (!nombre) return;
        try {
            const p = await this.model.obtenerProducto(nombre);
            this.view.limpiarPantalla();
            this.view.mostrarProductos(p);
        } catch (error) {
            console.error(error.message);
        }
    }

    async filtrarPorCategoria(categoria) {
        this.view.limpiarPantalla();
        const listado = await this.model.obtenerPorTipo(tipo)
        this.view.limpiarPantalla();
        for (const producto of listado) {
            const detalles = await this.model.obtenerProducto(p.name);
            this.view.dibujarTarjeta(detalles);
        }
    }

    const app = new Controller(new Model(), new View());

}