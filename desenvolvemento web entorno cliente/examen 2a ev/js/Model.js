class Model {
    constructor() {
        this.apiUrl = 'https://fakestoreapi.com/products';
        this.productos = [];
    }

    async cargaInicial() {
        try {
            const resp = await fetch(this.apiUrl);
            if (!resp.ok) throw new Error('Error al cargar productos');
            const data = await resp.json();
            this.productos = data;
            return this.productos;
        } catch (err) {
            console.error(err);
            throw err;
        }
    }

    async borrarProducto(id) {
        try {
            const resp = await fetch(`${this.apiUrl}/${id}`, { method: 'DELETE' });
            if (!resp.ok) throw new Error('Error al borrar producto');
            this.productos = this.productos.filter(p => p.id != id);
        } catch (err) {
            console.error(err);
            throw err;
        }
    }

    async crearProducto(data) {
        try {
            const resp = await fetch(this.apiUrl, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: { 'Content-Type': 'application/json' }
            });
            if (!resp.ok) throw new Error('Error al crear producto');
            const nuevo = new Producto(await resp.json());
            this.productos.push(nuevo);
            return nuevo;
        } catch (err) {
            console.error(err);
            throw err;
        }
    }

    async editarProducto(id, data) {
        try {
            const resp = await fetch(`${this.apiUrl}/${id}`, {
                method: 'PUT',
                body: JSON.stringify(data),
                headers: { 'Content-Type': 'application/json' }
            });
            if (!resp.ok) throw new Error('Error al editar producto');
            const actualizado = new Producto(await resp.json());
            this.productos = this.productos.map(p => p.id == id ? actualizado : p);
            return actualizado;
        } catch (err) {
            console.error(err);
            throw err;
        }
    }
}
