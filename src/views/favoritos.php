<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos - Figueres Sostenible</title>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!--<style>
        .bg-custom-green {
            background-color: #1B4332;
        }
        .text-custom-green {
            color: #1B4332;
        }
        .btn-custom-green {
            background-color: #1B4332;
            color: white;
        }
        .btn-custom-green:hover {
            background-color: #143728;
            color: white;
        }
        .favorite-icon {
            color: #f5c518;
        }
    </style>!-->
</head>
<body class="bg-custom-green-light">
    <div class="bg-custom-green-darkest py-2">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html">
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
    <!-- Header -->
    <nav class="navbar-expand-md navbar-dark bg-custom-green-medium">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Eventos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-leaf"></i> Consejos</a>
                    </li>
                    <li class="nav-item my-hover-link">
                        <a class="nav-link text-white" href="#"><i class="fas fa-bullhorn"></i> Clasificados</a>
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
        <h1 class="fs-3 fw-bold mb-4 text-custom-green">Eventos Favoritos</h1>
        
        <!-- Favorite Events Grid -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Example Event Card -->
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagen del Evento">
                    <div class="card-body">
                        <h5 class="card-title text-custom-green">Prova</h5>
                        <p class="card-text text-muted small">Prova</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>Prova</span>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-eye"></i> Ver detalles
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Repite las tarjetas de eventos favoritos según sea necesario -->
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagen del Evento">
                    <div class="card-body">
                        <h5 class="card-title text-custom-green">Charla sobre Energías Renovables</h5>
                        <p class="card-text text-muted small">Descubre las innovaciones en energía solar.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>Biblioteca Municipal</span>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-eye"></i> Ver detalles
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Añade más eventos favoritos aquí -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
