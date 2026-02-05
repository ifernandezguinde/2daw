class Controller {
    constructor(model, view) {
        this.model = model;
        this.view = view;

        this.searchInput = document.getElementById('search');
        this.btnBuscar = document.getElementById('btnBuscar');
        this.filterCat = document.getElementById('filter-cat');
        this.btnSave = document.getElementById('btn-save');
        this.btnNuevo = document.getElementById('btn-open-modal');

        this.init();
    }

    async init() {
        try {
            const productos = await this.model.cargaInicial();
            this.view.mostrarProductos(productos);
        } catch {
            this.view.mostrarError('No se pudieron cargar los productos');
        }

        this.btnBuscar.addEventListener('click', () => this.buscar());
        this.filterCat.addEventListener('change', () => this.filtrarCategoria());
        this.btnSave.addEventListener('click', () => this.guardarProducto());
        this.btnNuevo.addEventListener('click', () => this.view.prepararAlta());

        this.view.grid.addEventListener('click', e => this.gestionarGrid(e));
    }

    buscar() {
        const texto = this.searchInput.value.toLowerCase();
        const filtrados = this.model.productos.filter(p =>
            p.title.toLowerCase().includes(texto)
        );
        this.view.mostrarProductos(filtrados);
    }

    filtrarCategoria() {
        const cat = this.filterCat.value;
        const res = cat === 'all'
            ? this.model.productos
            : this.model.productos.filter(p => p.category === cat);
        this.view.mostrarProductos(res);
    }

    async gestionarGrid(e) {
        const card = e.target.closest('.item-p');
        if (!card) return;
        const id = card.dataset.id;

        if (e.target.classList.contains('btn-delete')) {
            try {
                await this.model.borrarProducto(id);
                card.remove();
            } catch {
                this.view.mostrarError('Error al borrar producto');
            }
        }

        if (e.target.classList.contains('btn-edit')) {
            const prod = this.model.productos.find(p => p.id == id);
            this.view.prepararEdicion(prod);
        }
    }

    async guardarProducto() {
        const data = {
            title: this.view.titleInput.value,
            price: this.view.priceInput.value,
            category: this.view.categoryInput.value,
            image: this.view.imageInput.value
        };

        try {
            if (this.view.idInput.value) {
                await this.model.editarProducto(this.view.idInput.value, data);
            } else {
                await this.model.crearProducto(data);
            }
            this.view.mostrarProductos(this.model.productos);
        } catch {
            this.view.mostrarError('Error al guardar producto');
        }
    }
}

new Controller(new Model(), new View());
