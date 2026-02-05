class View {
    constructor() {
        this.grid = document.getElementById('grid');
        this.errorContainer = document.getElementById('error-container');

        this.modalElement = document.getElementById('productModal');
        this.bsModal = new bootstrap.Modal(this.modalElement);

        this.form = document.getElementById('productForm');
        this.idInput = document.getElementById('prod-id');
        this.titleInput = document.getElementById('prod-title');
        this.priceInput = document.getElementById('prod-price');
        this.categoryInput = document.getElementById('prod-category');
        this.imageInput = document.getElementById('prod-image');
    }

    limpiarGrid() {
        this.grid.innerHTML = '';
    }

    mostrarProductos(productos) {
        this.limpiarGrid();
        productos.forEach(p => {
            this.grid.insertAdjacentHTML('beforeend', `
            <div class="col item-p" data-id="${p.id}">
                <div class="card h-100 card-product shadow-sm">
                    <div class="img-box p-3 text-center">
                        <img src="${p.image}" alt="${p.title}" style="max-height: 120px; width:auto;">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="category-badge mb-2 text-uppercase">${p.category}</span>
                        <h6 class="fw-bold product-name">${p.title}</h6>
                        <p class="text-primary fw-bold fs-5 mt-auto">$ ${p.price}</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm flex-grow-1 btn-edit">Editar</button>
                            <button class="btn btn-outline-danger btn-sm btn-delete">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
            `);
        });
    }

    prepararAlta() {
        this.form.reset();
        this.idInput.value = '';
    }   

    prepararEdicion(producto) {
        this.idInput.value = producto.id;
        this.titleInput.value = producto.title;
        this.priceInput.value = producto.price;
        this.categoryInput.value = producto.category;
        this.imageInput.value = producto.image;
        this.bsModal.show();
    }

    cerrarModal() {
        this.bsModal.hide();
    }
}
