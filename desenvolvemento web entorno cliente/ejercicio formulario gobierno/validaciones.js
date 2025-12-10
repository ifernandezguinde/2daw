// ========================================================
//  FUNCIONES DE VALIDACIÓN REUTILIZABLES
// ========================================================

function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validarDNI(dni) {
    const regexDNI = /^\d{8}[A-Za-z]$/;
    return regexDNI.test(dni);
}

function validarNIE(nie) {
    const regexNIE = /^[XYZ]\d{7}[A-Za-z]$/;
    return regexNIE.test(nie);
}

function validarTelefono(telefono) {
    const regexTel = /^(\+?\d{1,3})?[6789]\d{8}$/;
    return regexTel.test(telefono);
}

function esMayorDeEdad(fechaISO) {
    const hoy = new Date();
    const nacimiento = new Date(fechaISO);
    
    let edad = hoy.getFullYear() - nacimiento.getFullYear();
    const mes = hoy.getMonth() - nacimiento.getMonth();

    if (mes < 0 || (mes === 0 && hoy.getDate() < nacimiento.getDate())) {
        edad--;
    }
    return edad >= 18;
}


// ========================================================
//  VALIDACIÓN EN TIEMPO REAL
// ========================================================

// NOMBRE
document.getElementById("nombre").addEventListener("input", function () {
    const err = document.getElementById("errNombre");
    if (this.value.trim() === "") {
        err.textContent = "El nombre es obligatorio.";
    } else {
        err.textContent = "";
    }
});

// PRIMER APELLIDO
document.getElementById("apellido1").addEventListener("input", function () {
    const err = document.getElementById("errApellido1");
    if (this.value.trim() === "") {
        err.textContent = "El primer apellido es obligatorio.";
    } else {
        err.textContent = "";
    }
});

// DOCUMENTO
document.getElementById("numDoc").addEventListener("input", function () {
    const tipo = document.getElementById("tipoDoc").value;
    const valor = this.value.trim();
    const err = document.getElementById("errNumDoc");

    if (!valor) {
        err.textContent = "Debe introducir el número de documento.";
        return;
    }

    if (tipo === "DNI") {
        if (!validarDNI(valor)) {
            err.textContent = "El DNI debe ser 8 números y una letra.";
        } else {
            err.textContent = "";
        }
    }

    if (tipo === "NIE") {
        if (!validarNIE(valor)) {
            err.textContent = "El NIE debe ser X/Y/Z + 7 números + letra.";
        } else {
            err.textContent = "";
        }
    }
});

// EMAIL
document.getElementById("email").addEventListener("input", function () {
    const err = document.getElementById("errEmail");
    if (!validarEmail(this.value)) {
        err.textContent = "El correo electrónico no es válido.";
    } else {
        err.textContent = "";
    }
});

// TELÉFONO
document.getElementById("telefono").addEventListener("input", function () {
    const err = document.getElementById("errTelefono");
    if (!validarTelefono(this.value)) {
        err.textContent = "El teléfono debe tener 9 dígitos y empezar por 6,7,8 o 9.";
    } else {
        err.textContent = "";
    }
});

// CONTRASEÑA
document.getElementById("password").addEventListener("input", function () {
    const err = document.getElementById("errPassword");
    const valor = this.value;

    if (valor.length < 12) {
        err.textContent = "Debe tener al menos 12 caracteres.";
    } else if (!/[0-9]/.test(valor)) {
        err.textContent = "Debe incluir al menos un número.";
    } else if (!/[!@#%^&*]/.test(valor)) {
        err.textContent = "Debe incluir un símbolo (!@#%^&*).";
    } else {
        err.textContent = "";
    }
});

// REPETIR CONTRASEÑA
document.getElementById("password2").addEventListener("input", function () {
    const err = document.getElementById("errPassword2");
    if (this.value !== document.getElementById("password").value) {
        err.textContent = "Las contraseñas no coinciden.";
    } else {
        err.textContent = "";
    }
});


// ========================================================
//  VALIDACIÓN FINAL AL ENVIAR EL FORMULARIO
// ========================================================

document.getElementById("formRegistro").addEventListener("submit", function (e) {
    e.preventDefault();
    let valido = true;

    // Campos
    const nombre = document.getElementById("nombre").value.trim();
    const apellido1 = document.getElementById("apellido1").value.trim();
    const tipoDoc = document.getElementById("tipoDoc").value;
    const numDoc = document.getElementById("numDoc").value.trim();
    const fecha = document.getElementById("fechaNacimiento").value;
    const email = document.getElementById("email").value.trim();
    const telefono = document.getElementById("telefono").value.trim();
    const pass = document.getElementById("password").value;
    const pass2 = document.getElementById("password2").value;
    const consentimiento = document.getElementById("consentimiento").checked;

    // Reset errores
    document.querySelectorAll(".error").forEach(err => err.textContent = "");

    // Validaciones obligatorias finales
    if (!nombre) { document.getElementById("errNombre").textContent = "El nombre es obligatorio."; valido = false; }
    if (!apellido1) { document.getElementById("errApellido1").textContent = "El primer apellido es obligatorio."; valido = false; }
    if (!tipoDoc) { document.getElementById("errTipoDoc").textContent = "Debe seleccionar un tipo de documento."; valido = false; }

    if (!numDoc) {
        document.getElementById("errNumDoc").textContent = "Debe indicar su número de documento.";
        valido = false;
    } else {
        if (tipoDoc === "DNI" && !validarDNI(numDoc)) {
            document.getElementById("errNumDoc").textContent = "El DNI no tiene un formato válido.";
            valido = false;
        }
        if (tipoDoc === "NIE" && !validarNIE(numDoc)) {
            document.getElementById("errNumDoc").textContent = "El NIE no tiene un formato válido.";
            valido = false;
        }
    }

    if (!fecha || !esMayorDeEdad(fecha)) {
        document.getElementById("errFecha").textContent = "Debe ser mayor de 18 años.";
        valido = false;
    }

    if (!email || !validarEmail(email)) {
        document.getElementById("errEmail").textContent = "El correo electrónico no es válido.";
        valido = false;
    }

    if (!telefono || !validarTelefono(telefono)) {
        document.getElementById("errTelefono").textContent = "El teléfono no es válido.";
        valido = false;
    }

    if (!pass) {
        document.getElementById("errPassword").textContent = "Debe indicar una contraseña.";
        valido = false;
    }

    if (!pass2 || pass !== pass2) {
        document.getElementById("errPassword2").textContent = "Las contraseñas no coinciden.";
        valido = false;
    }

    if (!consentimiento) {
        document.getElementById("errConsentimiento").textContent = "Debe aceptar el consentimiento.";
        valido = false;
    }

    if (valido) {
        alert("Formulario válido. Enviando datos...");
        this.submit();
    }
});
