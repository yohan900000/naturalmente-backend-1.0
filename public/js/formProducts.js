document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.links a');
    const forms = document.querySelectorAll('.form__main form');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Cacher tous les formulaires
            forms.forEach(form => {
                form.classList.add('hidden');
            });

            // Supprimer la classe active de tous les liens
            links.forEach(link => {
                link.classList.remove('active');
            });

            const formType = link.getAttribute('data-form-type');
            const targetForm = document.getElementById(`${formType}-form`);
            if (targetForm) {
                targetForm.classList.remove('hidden');
                link.classList.add('active');
            }
        });
    });
});