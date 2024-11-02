<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../public/src/css/style.css">
    <script src="../../public/src/js/main.js"></script>
</head>

<body class="bg-custom-green-lightest ">
    <!-- Edit Profile Form -->
    <div class="mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="text-start mb-2">
                    <button class="btn btn-link text-success mb-4">
                        <i class="bi bi-arrow-left back-arrow" onclick="history.back()"></i>
                        Volver atrás
                    </button>
                </div>
                <div class="card shadow">
                    <div class="card-body p-3">
                        <h1 class="text-custom-green-dark mb-4">Editar Perfil</h1>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="profile-picture" id="profilePictureContainer">
                                <img id="profilePicture" src="../../public/img/user-profile-default.png" alt="Foto de perfil" class="img-fluid">
                            </div>
                            <button class="edit-icon d-flex align-items-center justify-content-center" title="Cambiar foto" onclick="document.getElementById('profileImageInput').click();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"></path>
                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"></path>
                                </svg>
                            </button>
                            <input type="file" id="profileImageInput" accept="image/*" name="profileImg" onchange="previewImage(event)" style="display: none;">
                        </div>

                        <form id="profileEditForm" method="POST" enctype="multipart/form-data">
                            <div class="mb-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Juan" value="Juan" required>
                                <div class="invalid-feedback">El nombre es obligatorio.</div>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Pérez" value="Pérez" required>
                                <div class="invalid-feedback">Los apellidos son obligatorios.</div>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="user" name="user" placeholder="juan.perez" value="juan.perez" required>
                                <div class="invalid-feedback">El nombre de usuario es obligatorio.</div>
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control" id="email" name="email" placeholder="juan.perez@email.com" value="juan.perez@email.com" required>
                                <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
                            </div>
                            <div class="mb-2">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" minlength="8" maxlength="20" required>
                                <div class="invalid-feedback">La contraseña debe tener entre 8 y 20 caracteres.</div>
                            </div>
                            <div class="mb-2">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Repetir Contraseña" minlength="8" maxlength="20" required>
                                <div class="invalid-feedback">Las contraseñas no coinciden</div>
                            </div>
                            <div class="mb-2">
                                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Nueva Contraseña" minlength="8" maxlength="20" required>
                                <div class="invalid-feedback">La nueva contraseña debe tener entre 8 y 20 caracteres.</div>
                            </div>
                            <div class="mb-2">
                                <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" placeholder="Repetir Nueva Contraseña" minlength="8" maxlength="20" required>
                                <div class="invalid-feedback">Las nuevas contraseñas no coinciden.</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-custom-green-darkest text-white">Guardar Cambios</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>