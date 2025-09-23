document.addEventListener("DOMContentLoaded", function() {
    const successMessage = document.getElementById("alerta-datos");
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.display = "none";
        }, 5000);
    }

    const searchInput = document.getElementById("buscar");
    const searchForm = document.getElementById("form-buscar");

    searchForm.addEventListener("submit", function(event) {
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

    searchInput.addEventListener("keyup", function() {
        const searchTerm = searchInput.value;
        const url = `/datos/buscar?buscar=${encodeURIComponent(searchTerm)}`;
        actualizarTabla(url);
    });

    document.addEventListener("click", function(event) {
        const link = event.target.closest(".d-flex a");
        if (link) {
            event.preventDefault();
            const urlBase = link.href;
            const searchTerm = searchInput.value;
            const finalUrl = searchTerm ? `${urlBase}&buscar=${encodeURIComponent(searchTerm)}` : urlBase;
            actualizarTabla(finalUrl);
        }
    });
});
