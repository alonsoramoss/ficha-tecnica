document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formFicha");

    let dataInicial = {};
    function guardarEstadoInicial() {
        dataInicial = {};
        form.querySelectorAll("input, textarea, select").forEach(el => {
            if (el.type === "checkbox" || el.type === "radio") {
                dataInicial[el.name + el.value] = el.checked;
            } else {
                dataInicial[el.name] = el.value;
            }
        });
    }
    guardarEstadoInicial();

    function formModificado() {
        let modificado = false;
        form.querySelectorAll("input, textarea, select").forEach(el => {
            if (el.type === "checkbox" || el.type === "radio") {
                if (dataInicial[el.name + el.value] !== el.checked) modificado = true;
            } else {
                if (dataInicial[el.name] !== el.value) modificado = true;
            }
        });
        return modificado;
    }

    window.addEventListener("beforeunload", function (e) {
        if (formModificado()) {
            e.preventDefault();
            e.returnValue = '';
        }
    });

    form.addEventListener("submit", function () {
        setTimeout(() => {
            guardarEstadoInicial();
        }, 100);
    });
});
