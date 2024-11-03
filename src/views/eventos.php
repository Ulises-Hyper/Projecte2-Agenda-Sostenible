<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Figueres Sostenible</title>
    <link rel="stylesheet" href="/src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-custom-green-light">
    <!-- Header -->
        <div class="bg-custom-green-darkest py-2">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="64" width="64">
                        <!-- Capa principal de hoja -->
                        <path 
                            d="M16 8C16 8 12 12 10 16C10 20 13 23 16 24C19 23 22 20 22 16C20 12 16 8 16 8Z" 
                            fill="#348C41"
                        />
                        
                        <!-- Detalle central -->
                        <path 
                            d="M12 16C12 16 14 18 16 18C18 18 20 16 20 16C20 19 18 21 16 21C14 21 12 19 12 16Z" 
                            fill="#B8D5A7"
                        />
                    </svg>
                </a>
                <div class="input-group w-50">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Buscar eventos, consejos, anuncios..." />
                    <button class="btn btn-outline-secondary text-gray-600">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn text-white position-relative me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"></path>
                        </svg>
                        <!--<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-custom-green-medium">3</span>!-->
                    </button>
                    <button class="d-flex btn align-items-center text-white">
                        <i class="fas fa-user-circle fs-2"></i>
                        <span class="ms-2 d-none d-md-inline">Mi Cuenta</span>
                    </button>
                </div>
            </div>
        </div>

    <nav class="navbar-expand-md navbar-dark bg-custom-green-medium">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="eventos.php"><i class="fas fa-calendar-alt"></i> Eventos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-leaf"></i> Consejos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="favoritos.php"><i class="fas fa-bullhorn"></i> Favoritos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-users"></i> Comunidad</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-4">
        <div class="bg-custom-green-light">
            <!-- Hero Section -->
            <div class="mb-4">
                <h1 class="fs-2 fw-bold">Eventos</h1>
                <p class="text-muted">Descubre todas las actividades y eventos sostenibles en Figueres</p>
            </div>

            <!-- Time Filters -->
            <div class="mb-4 overflow-auto">
                <ul class="nav nav-pills flex-nowrap">
                    <li class="nav-item me-2">
                        <a class="nav-link rounded-pill" href="#">Todos los eventos</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link rounded-pill" href="#">Hoy</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link rounded-pill" href="#">Esta semana</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link rounded-pill" href="#">Este mes</a>
                    </li>
                </ul>
            </div>
            <!-- Categories -->
            <div class="row g-3 mb-4">
                <div class="col-6">
                    <button class="btn border w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                        <div
                            class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-calendar text-custom-green"></i>
                        </div>
                        <span class="fw-medium">Talleres</span>
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn border w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                        <div
                            class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-mic text-custom-green"></i>
                        </div>
                        <span class="fw-medium">Charlas</span>
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn border w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                        <div
                            class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-people text-custom-green"></i>
                        </div>
                        <span class="fw-medium">Voluntariado</span>
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn border w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                        <div
                            class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-star text-custom-green"></i>
                        </div>
                        <span class="fw-medium">Actividades</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Events List -->
        <div class="events-list">
            <!-- Event Card -->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex gap-3 mb-3">
                        <div
                            class="date-box bg-light rounded d-flex flex-column align-items-center justify-content-center">
                            <span class="fs-3 fw-bold text-custom-green">15</span>
                            <span class="text-custom-green">NOV</span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="card-title">Taller de Reciclaje Creativo</h5>
                            <p class="card-text text-muted small">Aprende a dar una segunda vida a materiales
                                reciclables</p>
                            <div class="d-flex gap-3 text-muted small">
                                <div>
                                    <i class="bi bi-clock me-1"></i>
                                    <span>10:00</span>
                                </div>
                                <div>
                                    <i class="bi bi-geo-alt me-1"></i>
                                    <span>Centro Cívico</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-custom-green fw-medium">Gratuito</span>
                        <button class="btn btn-custom-green">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Repeated Event Cards -->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex gap-3 mb-3">
                        <div
                            class="date-box bg-light rounded d-flex flex-column align-items-center justify-content-center">
                            <span class="fs-3 fw-bold text-custom-green">17</span>
                            <span class="text-custom-green">NOV</span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="card-title">Charla sobre Energías Renovables</h5>
                            <p class="card-text text-muted small">Descubre las últimas innovaciones en energía solar</p>
                            <div class="d-flex gap-3 text-muted small">
                                <div>
                                    <i class="bi bi-clock me-1"></i>
                                    <span>18:00</span>
                                </div>
                                <div>
                                    <i class="bi bi-geo-alt me-1"></i>
                                    <span>Biblioteca Municipal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-custom-green fw-medium">Gratuito</span>
                        <button class="btn btn-custom-green">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-4">
                <button class="btn text-custom-green fw-medium">
                    Cargar más eventos
                </button>
            </div>
        </div>
    </div>

    <!-- Floating Filter Button -->
    <button class="btn btn-custom-green-light rounded-circle filter-button shadow">
        <i class="bi bi-funnel fs-5 text-white"></i>
    </button>

    <footer class="bg-custom-green-darkest footer">
        <div class="container">
            <div class="row py-4">
                <!-- Columna 1 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Sobre Nosotros</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-custom-white text-decoration-none">Quiénes somos</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">Nuestra misión</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Eventos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-custom-white text-decoration-none">Próximos eventos</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">Calendario</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">Inscripciones</a></li>
                    </ul>
                </div>

                <!-- Columna 3 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Recursos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-custom-white text-decoration-none">Blog</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">Documentación</a></li>
                        <li><a href="#" class="text-custom-white text-decoration-none">FAQ</a></li>
                    </ul>
                </div>

                <!-- Columna 4 -->
                <div class="col-md-3 col-sm-6 mb-3">
                    <h5 class="text-custom-white mb-3">Síguenos</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-custom-white"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-custom-white"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-custom-white"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-custom-white"><i class="bi bi-linkedin fs-5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>