<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consejos de Sostenibilidad</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/src/js/main.js"></script>
</head>

<body>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </button>

                <?php if (isset($_SESSION['user'])): ?>
                    <!-- Menú de usuario logueado -->
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php if (!empty($_SESSION['user']['profile_img'])): ?>
                                <img src="<?= $_SESSION['user']['profile_img'] ?>" alt="Foto de perfil" width="32" height="32"
                                    class="rounded-circle">
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

    <!-- Encabezado -->
    <header class="bg-custom-green-light text-black text-center py-5">
        <h1>Consejos de Sostenibilidad</h1>
        <p class="lead">
            Descubre prácticas sencillas para hacer tu vida más sostenible.
        </p>
    </header>

    <!-- Contenido Principal -->
    <main class="container my-5">
        <!-- Botón "Crear Consejo" solo para administradores -->
        <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'administrator'): ?>
            <div class="text-end mb-4">
                <a href="index.php?r=crearconsejo" class="btn btn-success">
                    <i class="fas fa-plus"></i> Crear Consejo
                </a>
            </div>
        <?php endif; ?>
        <div class="row">
            <!-- Consejos de Sostenibilidad -->
            <?php if (!empty($tips)): ?>
                <?php foreach ($tips as $tip): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex flex-column">
                                <!-- Título del Consejo -->
                                <h5 class="card-title text-success"><?php echo htmlspecialchars($tip['title']); ?></h5>

                                <!-- Descripción Breve -->
                                <p class="card-text text-muted"><?php echo htmlspecialchars($tip['brief_description']); ?>.</p>

                                <!-- Texto Explicativo -->
                                <p class="card-text flex-grow-1">
                                    <?php echo nl2br(htmlspecialchars($tip['explanatory_text'])); ?>
                                </p>

                                <!-- Hashtags -->
                                <div class="mt-3">
                                    <?php
                                    // Dividir el campo de hashtags en un array usando la coma como separador
                                    $hashtags = explode(',', $tip['hashtags']);

                                    // Recorrer cada hashtag y mostrarlo como una etiqueta
                                    foreach ($hashtags as $hashtag):
                                    ?>
                                        <span class="badge bg-primary"><?= htmlspecialchars(trim($hashtag)); ?></span>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Botones de Editar y Eliminar -->
                                <div class="mt-3 d-flex justify-content-end">
                                    <!-- Botón Editar -->
                                    <a href="index.php?r=editarconsejo&id=<?= $tip['id'] ?>" class="btn btn-warning btn-sm me-2">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>

                                    <!-- Botón Eliminar -->
                                    <a href="index.php?r=eliminarconsejo&id=<?= $tip['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este consejo?');">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-custom-green-darkest text-light footer">
        <div class="container">
            <div class="row py-4">
                <!-- Columna 1 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Sobre Nosotros</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-light text-decoration-none">Quiénes somos</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">Nuestra misión</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">Contacto</a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Eventos</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-light text-decoration-none">Próximos eventos</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">Calendario</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">Inscripciones</a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 3 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Recursos</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-light text-decoration-none">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">Documentación</a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">FAQ</a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 4 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Síguenos</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Popper.js y Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>