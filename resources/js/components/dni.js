document.addEventListener("DOMContentLoaded", function() {
    const campoDni = document.getElementById("dni");
    const form = document.getElementById("formFicha");

    campoDni.addEventListener("input", function() {
        const soloNumeros = /^\d{8}$/;

        if (!soloNumeros.test(this.value)) {
            this.setCustomValidity("El DNI debe contener exactamente 8 dígitos numéricos.");
        } else {
            this.setCustomValidity("");
        }
    });

    form.addEventListener("submit", function(event) {
        if (!campoDni.checkValidity()) {
            event.preventDefault();
            campoDni.reportValidity();
        }
    });
});
