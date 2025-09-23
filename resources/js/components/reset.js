document.getElementById('formFicha').addEventListener('submit', function(event) {
    setTimeout(function() {
        document.getElementById('formFicha').reset();

        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        
        checkboxes.forEach(function (checkbox) {
            const campoInput = checkbox.closest('.input-group').querySelector('input[type="text"]');
            campoInput.disabled = true;
        });
    }, 0);
});
