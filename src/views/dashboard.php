<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/src/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/src/js/main.js"></script>

</head>

<body class="bg-custom-green-lightest">

    <!-- Barra superior con buscador -->
    <div class="bg-custom-green-darkest py-2">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="64" width="64">
                    <path d="M16 8C16 8 12 12 10 16C10 20 13 23 16 24C19 23 22 20 22 16C20 12 16 8 16 8Z" fill="#348C41" />
                    <path d="M12 16C12 16 14 18 16 18C18 18 20 16 20 16C20 19 18 21 16 21C14 21 12 19 12 16Z" fill="#B8D5A7" />
                </svg>
            </a>
            <form action="index.php?r=search" method="GET" class="input-group w-50">
                <input type="hidden" name="r" value="search" />
                <input type="text" id="searchInput" name="searchInput" class="form-control" placeholder="Buscar eventos, consejos, anuncios..." />
                <button type="submit" id="searchButton" class="btn btn-outline-secondary text-gray-600">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="d-flex align-items-center">
                <button class="btn text-white position-relative me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </button>

                <?php if (isset($_SESSION['user'])): ?>
                    <!-- Menú de usuario logueado -->
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (!empty($_SESSION['user']['profile_img'])): ?>
                                <img src="<?= $_SESSION['user']['profile_img'] ?>" alt="Foto de perfil" width="32" height="32" class="rounded-circle">
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="32" height="32">
                                    <circle cx="100" cy="100" r="100" fill="#1F2937" />
                                    <circle cx="100" cy="85" r="35" fill="#F9FAFB" />
                                    <path d="M100 125 C40 125, 40 200, 40 200 L160 200 C160 200, 160 125, 100 125" fill="#F9FAFB" />
                                </svg>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu text-small">
                            <?php if ($_SESSION['user']['role'] === 'administrator'): ?>
                                <li><a class="dropdown-item" href="index.php?r=dashboard">Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="index.php?r=profile">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index.php?r=dologout">Cerrar sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <!-- Botones de registro e inicio de sesión para usuarios no logueados -->
                    <div class="text-end">
                        <button type="button" class="hover-white me-2">
                            <a href="/?r=login">Iniciar Sesión</a>
                        </button>
                        <button type="button" class="hover-white me-2">
                            <a href="/?r=register">Registrarse</a>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Navegación Principal -->
    <nav class="navbar-expand-md navbar-dark bg-custom-green-medium">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="/?r=eventos"><i class="fas fa-calendar-alt"></i> Eventos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="/?r=consejos"><i class="fas fa-lightbulb"></i> Consejos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="/?r=favoritos"><i class="fas fa-heart"></i> Favoritos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="/?r=anunci"><i class="fas fa-newspaper"></i> Anunci Clasificat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex pt-3 justify-content-between">
                <h3>Gestión de Usuarios</h3>
                <button class="btn btn-primary bg-custom-green-darkest" data-bs-toggle="modal" data-bs-target="#addUserModal">Agregar Usuario</button>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo Electrónico</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de fila de usuario -->
                        <?php if (is_array(value: $usuarios) || is_object($usuarios)): ?>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($usuario['user_id']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['username']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['surname']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['name']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['role']); ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">
                                            <a href="/index.php?r=dashboardedit&id=<?= $usuario['user_id'] ?>">Editar</a>
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <a href="/index.php?r=delete&id=<?= $usuario['user_id'] ?>">Borrar</a>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9">No hay usuarios registrados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal para agregar usuario -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Agregar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="/index.php?r=dashboardadduser">
                        <!-- <input type="hidden" name="user_id" value="//htmlspecialchars($user['user_id'])"> -->
                        <div class="mb-3">
                            <label for="Name" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="username" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="surName" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="surname" id="surname" required>
                        </div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="useremail" required>
                        </div>
                        <div class="mb-3">
                            <label for="userRole" class="form-label">Rol</label>
                            <select class="form-select" name="userole" id="userole">
                                <option value="user">Usuario</option>
                                <option value="administrator">Administrador</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="imgProfile" class="form-label">Imágen de Perfil</label>
                            <input type="file" class="form-control" name="img_profile" id="imgProfile">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="repeatPassword" class="form-label">Repetir Contraseña</label>
                            <input type="password" class="form-control" name="repeatpassword" id="repeatPassword" required>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>