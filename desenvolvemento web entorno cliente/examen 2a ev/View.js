class View {
    constructor() {
        this.modalElement = document.getElementById('productModal');
        this.bsModal = new bootstrap.Modal(this.modalElement);
    }

    editar() {
        this.bsModal.show();
    }

    mostrarProductos(p) {
        const card = `
        <div class="col item-p" data-id="${p.id}">
            <div class="card h-100 card-product shadow-sm">
                <div class="img-box p-3 text-center">
                    <img src="${p.image}" alt="${p.title}" style="max-height: 120px; width: auto;">
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="category-badge mb-2 d-inline-block text-uppercase">${p.category}</span>
                    <h6 class="fw-bold product-name">${p.title}</h6>
                    <p class="text-primary fw-bold fs-5 mt-auto">$ ${p.price}</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary btn-sm flex-grow-1 btn-edit">Editar</button>
                        <button class="btn btn-outline-danger btn-sm btn-delete">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>`
    }

    limpiarPantalla() {
        this.container.innerHTML = '';
    }

}

    <div class="alert alert-danger">
        ERROR
    </div>

    setTimeout({
        this.error - container.innerHTML = '';
    }, 1000);