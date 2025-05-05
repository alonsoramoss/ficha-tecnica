document.addEventListener("DOMContentLoaded", function() {
    var campoDni = document.getElementById("dni");

    campoDni.addEventListener("input", function() {
        var dni = campoDni.value;
        if (dni.length !== 8) {
            campoDni.setCustomValidity("El DNI debe tener exactamente 8 dígitos.");
        } else {
            campoDni.setCustomValidity("");
        }
    });

    var form = document.getElementById("formFicha");
    form.addEventListener("submit", function(event) {
        if (!campoDni.validity.valid) {
            event.preventDefault();
        }
    });
});
