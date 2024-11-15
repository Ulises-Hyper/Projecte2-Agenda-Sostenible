// Espera a que todo el contenido de la página esté cargado antes de ejecutar el código.
document.addEventListener("DOMContentLoaded", () => {
    // === Manejo del formulario de edición de perfil ===
    const profileEditForm = document.getElementById("profileEditForm");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    const newPassword = document.getElementById("newPassword");
    const confirmNewPassword = document.getElementById("confirmNewPassword");
  
    if (
      profileEditForm &&
      password &&
      confirmPassword &&
      newPassword &&
      confirmNewPassword
    ) {
      // Validar contraseñas al enviar el formulario
      profileEditForm.addEventListener("submit", function (event) {
        if (password.value !== confirmPassword.value) {
          confirmPassword.setCustomValidity("Las contraseñas no coinciden.");
        } else {
          confirmPassword.setCustomValidity("");
        }
  
        if (newPassword.value !== confirmNewPassword.value) {
          confirmNewPassword.setCustomValidity(
            "Las nuevas contraseñas no coinciden."
          );
        } else {
          confirmNewPassword.setCustomValidity("");
        }
  
        if (!profileEditForm.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
  
        profileEditForm.classList.add("was-validated");
      });
  
      // Limpiar mensajes de error dinámicamente
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
          confirmNewPassword.setCustomValidity(
            "Las nuevas contraseñas no coinciden."
          );
        }
      });
    }
  
    // === Manejo de la calificación con estrellas ===
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
        // Resaltar estrellas al pasar el cursor
        star.addEventListener("mouseover", () => highlightStars(index));
  
        // Restaurar las estrellas al quitar el cursor
        star.addEventListener("mouseout", () => highlightStars(currentRating - 1));
  
        // Fijar la calificación al hacer clic
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
  
    // === Previsualización de la imagen de perfil ===
    const profileImageInput = document.getElementById("profileImageInput");
    if (profileImageInput) {
      profileImageInput.addEventListener("change", function (event) {
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
      });
    }
  });
  
  // === Función de búsqueda con filtro de fechas ===
  $(document).ready(function () {
    $("#filtrarButton").on("click", async () => {
      const dataBuscada = $("#filtreData").val();
  
      try {
        const res = await fetch(`index.php?r=filter&filtre_data=${dataBuscada}`);
        const response = await res.json();
        console.log(response);
      } catch (error) {
        console.error("Error al filtrar datos:", error);
      }
    });
  
    // Previsualización de la imagen usando jQuery
    $("#profileImageInput").on("change", function (event) {
      const file = event.target.files[0];
      const reader = new FileReader();
  
      reader.onload = function (e) {
        $("#profilePicture").attr("src", e.target.result);
      };
  
      if (file) {
        reader.readAsDataURL(file);
      }
    });
  });
  