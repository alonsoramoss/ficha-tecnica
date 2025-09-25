document.addEventListener("DOMContentLoaded", function () {
    const soloLetrasInputs = [
        "unidOrganica",
        "encargado",
        "cargo",
        "nomTecnico",
    ];

    soloLetrasInputs.forEach(id => {
        const input = document.getElementById(id);

        if (!input) return;

        input.addEventListener("input", function () {
            let valor = input.value;

            if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]*$/.test(valor)) {
                input.setCustomValidity("Solo se permiten letras y espacios.");
            } else if (valor.trim() === "") {
                input.setCustomValidity("Este campo no puede estar vacío.");
            } else {
                input.setCustomValidity("");
            }
        });
    });

    const observacion = document.getElementById("observacion");
    if (observacion) {
        observacion.addEventListener("input", function () {
            if (this.value.trim() === "") {
                this.setCustomValidity("La observación no puede estar vacía.");
            } else {
                this.setCustomValidity("");
            }
        });
    }

    const form = document.getElementById("formFicha");
    form.addEventListener("submit", function (e) {
        let valido = true;

        soloLetrasInputs.forEach(id => {
            const input = document.getElementById(id);
            if (input && !input.checkValidity()) {
                valido = false;
                input.reportValidity();
            }
        });

        if (observacion && !observacion.checkValidity()) {
            valido = false;
            observacion.reportValidity();
        }

        if (!valido) {
            e.preventDefault();
        }
    });
});
