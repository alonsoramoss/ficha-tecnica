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

    document.querySelectorAll("a[href]").forEach(link => {
        link.addEventListener("click", function (e) {
            if (!link.href.startsWith(location.origin) || link.target === "_blank") return;
            if (formModificado()) {
                const confirmarSalir = confirm("Hay datos ingresados que se perderán si abandonas esta página. ¿Deseas continuar?");
                if (!confirmarSalir) e.preventDefault();
            }
        });
    });

    window.addEventListener("popstate", function () {
        if (formModificado()) {
            const confirmarSalir = confirm("Hay datos ingresados que se perderán si abandonas esta página. ¿Deseas continuar?");
            if (!confirmarSalir) history.pushState(null, document.title, location.href);
        }
    });

    form.addEventListener("submit", function () {
        setTimeout(() => {
            guardarEstadoInicial();
        }, 100);
    });
});
