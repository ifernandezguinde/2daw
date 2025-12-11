/* Escribe el código JavaScript necesario para que el formulario funcione correctamente.
Instrucciones:
• Selecciona los elementos del DOM necesarios: el input para ingresar los elementos de la
lista, el botón para agregar elementos y la lista donde se mostrarán los elementos.
• Implementa una función llamada addItem que se ejecutará cuando se haga clic en el botón
«Agregar». Esta función debe hacer lo siguiente:
• Obtener el valor del input y asegurarse de que no esté vacío.
• Crear un nuevo elemento de lista (<li>) y establecer su contenido con el valor del
input.
• Crear dos botones dentro del nuevo elemento de lista: uno para marcar como
completado y otro para eliminar el elemento.
• Agregar eventos a los botones de completado y eliminación.
• Agregar el nuevo elemento a la lista de elementos.
• Limpiar el input después de agregar el elemento.
• Asocia la función addItem al evento click del botón «Agregar». */

// Selección de elementos del DOM
const inputElement = document.getElementById('newItemInput');
const addButton = document.getElementById('addItemBtn');
const itemList = document.getElementById('itemsList');

// Función para agregar un elemento a la lista
function addItem() {
    const itemText = inputElement.value.trim();
    
    // Verificar que el input no esté vacío
    if (itemText === '') {
        alert('Por favor, ingresa un elemento válido.');
        return;
    }

    // Crear un nuevo elemento de lista
    const listItem = document.createElement('li');
    listItem.textContent = itemText;

    // Crear botón de completar
    const completeButton = document.createElement('button');
    completeButton.textContent = 'Completar';
    completeButton.addEventListener('click', () => {
        listItem.style.textDecoration = 'line-through';
    });

    // Crear botón de eliminar
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Eliminar';
    deleteButton.addEventListener('click', () => {
        itemList.removeChild(listItem);
    });

    // Agregar botones al elemento de lista
    listItem.appendChild(completeButton);
    listItem.appendChild(deleteButton);

    // Agregar el nuevo elemento a la lista
    itemList.appendChild(listItem);

    // Limpiar el input
    inputElement.value = '';
}

// Asociar la función addItem al evento click del botón "Agregar"
addButton.addEventListener('click', addItem);

