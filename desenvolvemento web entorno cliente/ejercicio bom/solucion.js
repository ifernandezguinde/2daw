document.addEventListener("DOMContentLoaded", () => {
    // Variable global
    window.ventanaAbierta = null; 
    window.estadoElement = document.getElementById("estado");

    // Inicializar URL
    document.getElementById("url-actual").textContent = window.location.href;

    // =================================================================
    // 1. location
    window.mostrarURL = function() {
        console.log("URL Completa:", window.location.href);
        console.log("Ruta:", window.location.pathname);
        console.log("Query String:", window.location.search);
        alert("Revisa la consola para ver la URL.");
    };

    window.redirigirBOM = function() {
        if (confirm("¿Seguro que quieres ir a Google?")) {
            window.location.href = "https://www.google.com";
        }
    };

    window.recargarPagina = function() {
        window.location.reload();
    };

    // =================================================================
    // 2. Diálogos
    window.usarAlert = function() {
        alert("¡Hola! Esto es un alert del BOM.");
        document.getElementById("dialogo-resultado").textContent = "Alert: Se hizo clic en Aceptar.";
    };

    window.usarConfirm = function() {
        const resultado = confirm("¿Deseas continuar con esta acción?");
        document.getElementById("dialogo-resultado").textContent =
            resultado ? "Confirm: ACEPTAR (true)" : "Confirm: CANCELAR (false)";
    };

    window.usarPrompt = function() {
        const nombre = prompt("Por favor ingresa tu nombre:", "Anónimo");
        document.getElementById("dialogo-resultado").textContent =
            nombre ? `Prompt: "${nombre}"` : "Prompt: Cancelado";
    };

    // =================================================================
    // 3. history
    window.volverAtras = function() {
        history.back();
    };

    window.avanzar = function() {
        history.forward();
    };

    // =================================================================
    // 4. window.open / close
    window.abrirNuevaVentana = function() {
        if (window.ventanaAbierta && !window.ventanaAbierta.closed) {
            window.ventanaAbierta.focus();
            window.estadoElement.textContent = "La ventana ya está abierta.";
            return;
        }
        window.ventanaAbierta = window.open("https://www.wikipedia.org", "_blank", "width=500,height=300");
        if (window.ventanaAbierta) {
            window.estadoElement.textContent = "Pestaña abierta. Intenta cerrarla.";
        } else {
            window.estadoElement.textContent = "Error: Popup bloqueado.";
        }
    };

    window.cerrarVentanaAbierta = function() {
        if (window.ventanaAbierta && !window.ventanaAbierta.closed) {
            window.ventanaAbierta.close();
            window.ventanaAbierta = null;
            window.estadoElement.textContent = "Pestaña cerrada exitosamente.";
        } else {
            window.estadoElement.textContent = "No hay ventana abierta.";
        }
    };
});
