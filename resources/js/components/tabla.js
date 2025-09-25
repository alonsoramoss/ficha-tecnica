document.addEventListener("DOMContentLoaded", function() {
    const mensajeExito = document.getElementById("alerta-datos");
    if (mensajeExito) {
        setTimeout(() => {
            mensajeExito.style.display = "none";
        }, 5000);
    }

    const entradaBusqueda = document.getElementById("buscar");
    const formBusqueda = document.getElementById("form-buscar");

    formBusqueda.addEventListener("submit", function(event) {
        event.preventDefault();
    });

    function actualizarTabla(url) {
        fetch(url, {
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        })
        .then(response => response.json())
        .then(data => {
            document.querySelector("#tabla-datos tbody").innerHTML = data.html;
            document.querySelector(".d-flex").innerHTML = data.links;
        });
    }

    entradaBusqueda.addEventListener("keyup", function() {
        const textoBusqueda = entradaBusqueda.value;
        const url = `/datos/buscar?buscar=${encodeURIComponent(textoBusqueda)}`;
        actualizarTabla(url);
    });

    document.addEventListener("click", function(event) {
        const link = event.target.closest(".d-flex a");
        if (link) {
            event.preventDefault();
            const urlBase = link.href;
            const textoBusqueda = entradaBusqueda.value;
            const urlFinal = textoBusqueda ? `${urlBase}&buscar=${encodeURIComponent(textoBusqueda)}` : urlBase;
            actualizarTabla(urlFinal);
        }
    });
});
