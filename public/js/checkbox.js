document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
        const inputText = checkbox.closest('.input-group').querySelector('input[type="text"]');

        inputText.disabled = !checkbox.checked;

        checkbox.addEventListener('change', function () {
            inputText.disabled = !this.checked;
            if (!this.checked) {
                inputText.value = '';
            }
        });
    });
});
