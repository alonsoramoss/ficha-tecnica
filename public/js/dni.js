document.addEventListener("DOMContentLoaded", function() {
    var dniField = document.getElementById("dni");

    dniField.addEventListener("input", function() {
        var dni = dniField.value;
        if (dni.length !== 8) {
            dniField.setCustomValidity("El DNI debe tener exactamente 8 dígitos.");
        } else {
            dniField.setCustomValidity("");
        }
    });

    var form = document.getElementById("formFicha");
    form.addEventListener("submit", function(event) {
        if (!dniField.validity.valid) {
            event.preventDefault();
        }
    });
});
