// Espera a que todo el contenido de la página esté cargado antes de ejecutar el código.
document.addEventListener("DOMContentLoaded", () => {
    // Manejo del formulario de edición de perfil
    const profileEditForm = document.getElementById("profileEditForm");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    const newPassword = document.getElementById("newPassword");
    const confirmNewPassword = document.getElementById("confirmNewPassword");

    if (profileEditForm && password && confirmPassword && newPassword && confirmNewPassword) {
        profileEditForm.addEventListener("submit", function (event) {
            // Validación de las contraseñas
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Las contraseñas no coinciden.");
            } else {
                confirmPassword.setCustomValidity("");
            }

            if (newPassword.value !== confirmNewPassword.value) {
                confirmNewPassword.setCustomValidity("Las nuevas contraseñas no coinciden.");
            } else {
                confirmNewPassword.setCustomValidity("");
            }

            // Evitar el envío si el formulario es inválido
            if (!profileEditForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            profileEditForm.classList.add("was-validated");
        });

        // Limpiar el mensaje de error cuando las contraseñas coincidan
        confirmPassword.addEventListener("input", function () {
            if (password.value === confirmPassword.value) {
                confirmPassword.setCustomValidity("");
            } else {
                confirmPassword.setCustomValidity("Las contraseñas no coinciden.");
            }
        });

        confirmNewPassword.addEventListener("input", function () {
            if (newPassword.value === confirmNewPassword.value) {
                confirmNewPassword.setCustomValidity("");
            } else {
                confirmNewPassword.setCustomValidity("Las nuevas contraseñas no coinciden.");
            }
        });
    }

    // Manejo de la calificación con estrellas
    const stars = document.querySelectorAll(".rating-stars i");
    let currentRating = 0;

    function highlightStars(index) {
        stars.forEach((star, i) => {
            if (i <= index) {
                star.classList.remove("far");
                star.classList.add("fas");
            } else {
                star.classList.remove("fas");
                star.classList.add("far");
            }
        });
    }

    if (stars.length > 0) {
        stars.forEach((star, index) => {
            // Evento de pasar el cursor por encima de una estrella
            star.addEventListener("mouseover", () => highlightStars(index));

            // Evento de quitar el cursor de las estrellas, resalta solo las seleccionadas
            star.addEventListener("mouseout", () => highlightStars(currentRating - 1));

            // Evento de hacer clic en una estrella para fijar la calificación
            star.addEventListener("click", () => {
                currentRating = index + 1;
                const ratingValue = document.querySelector("#ratingValue");
                if (ratingValue) {
                    ratingValue.value = currentRating;
                }
                highlightStars(index);
            });
        });
    }

    // Función para previsualizar la imagen de perfil
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            const img = document.getElementById("profilePicture");
            if (img) {
                img.src = e.target.result;
            }
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    // Asignar la función de previsualización de imagen al input de archivo
    const profileImageInput = document.getElementById("profileImageInput");
    if (profileImageInput) {
        profileImageInput.addEventListener("change", previewImage);
    }
});
