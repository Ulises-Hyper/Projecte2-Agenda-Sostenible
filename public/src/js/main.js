// Espera a que todo el contenido de la página esté cargado antes de ejecutar el código.
document.addEventListener('DOMContentLoaded', () => {
    // Selecciona todos los elementos de las estrellas dentro del contenedor .rating-stars
    const stars = document.querySelectorAll('.rating-stars i');
    // Variable para almacenar la calificación seleccionada por el usuario
    let currentRating = 0;

    // Función para resaltar las estrellas hasta un índice determinado
    function highlightStars(index) {
        stars.forEach((star, i) => {
            // Si el índice de la estrella es menor o igual al índice pasado, resáltala
            if (i <= index) {
                star.classList.remove('far'); // Elimina la clase de estrella vacía
                star.classList.add('fas'); // Agrega la clase de estrella llena
            } else {
                // Si no, deja la estrella vacía
                star.classList.remove('fas'); // Elimina la clase de estrella llena
                star.classList.add('far'); // Agrega la clase de estrella vacía
            }
        });
    }

    // Agrega los eventos a cada estrella
    stars.forEach((star, index) => {
        // Evento de pasar el cursor por encima de una estrella
        star.addEventListener('mouseover', () => highlightStars(index));

        // Evento de quitar el cursor de las estrellas, resalta solo las seleccionadas
        star.addEventListener('mouseout', () => highlightStars(currentRating - 1));

        // Evento de hacer clic en una estrella para fijar la calificación
        star.addEventListener('click', () => {
            // La calificación seleccionada se almacena como el índice + 1
            currentRating = index + 1;
            // Actualiza el valor de un input oculto con la calificación para enviarlo en un formulario
            document.querySelector('#ratingValue').value = currentRating;
            // Resalta las estrellas hasta la calificación seleccionada
            highlightStars(index);
        });
    });
});

// Validación del formulario con Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');

    form.addEventListener('submit', function(event) {
        // Validación de contraseña y confirmación
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden.');
        } else {
            confirmPassword.setCustomValidity('');
        }

        // Evitar el envío si el formulario es inválido
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    });

    // Limpiar el mensaje de error cuando las contraseñas coincidan
    confirmPassword.addEventListener('input', function() {
        if (password.value === confirmPassword.value) {
            confirmPassword.setCustomValidity('');
        } else {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden.');
        }
    });
}); 