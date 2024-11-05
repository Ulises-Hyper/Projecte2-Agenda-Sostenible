<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/src/css/style.css">
    <script src="/src/js/main.js"></script>
</head>

<body class="bg-custom-green-light">
    <!-- Barra superior con buscador -->
    <div class="bg-custom-green-darkest py-2">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="64" width="64">
                    <path
                        d="M16 8C16 8 12 12 10 16C10 20 13 23 16 24C19 23 22 20 22 16C20 12 16 8 16 8Z"
                        fill="#348C41" />
                    <path
                        d="M12 16C12 16 14 18 16 18C18 18 20 16 20 16C20 19 18 21 16 21C14 21 12 19 12 16Z"
                        fill="#B8D5A7" />
                    <svg />
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
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </button>
                <button class="d-flex btn align-items-center text-white">
                    <div class="col-md-3 text-end">
                        <button type="button" class="hover-white me-2">
                            <a href="/?r=login">Iniciar Sesión</a>
                        </button>
                        <button type="button" class="hover-white">
                            <a href="/?r=register">Registrarse</a>
                        </button>
                    </div>
                </button>
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

    <!-- Carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" style="max-height: 550px; overflow: hidden;">
        <!-- Control indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-date">
            15 NOV
        </div>

        <!-- Image Container -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/paisaje-1.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 550px;">
            </div>
            <div class="carousel-item">
                <img src="/img/paisaje-2.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 550px;">
            </div>
            <div class="carousel-item">
                <img src="/img/paisaje-3.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 550px;">
            </div>
        </div>

        <!-- Navegation buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Event Container -->

    <div class="container">
        <div class="mt-3">
            <button class="btn btn-sm btn-tag bg-custom-white">
                <i class="fas fa-recycle me-1"></i>
                Taller
            </button>
        </div>
        <div class="mt-3">
            <h3>Taller de Reciclaje Creativo</h3>
            <p class="text-grey">Aprende a dar una segunda vida a materiales reciclables</p>
        </div>
    </div>

    <!-- Event Container -->
    <div class="container">
        <div class="row g-3 mb-4">
            <div class="col-6">
                <div class="rounded w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                    <div class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-alarm"></i>
                    </div>
                    <div>
                        <div>
                            <span class="fw-medium">Hora</span>
                        </div>
                        <div>
                            <span>10:00 - 12:00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="rounded w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                    <div class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-calendar text-custom-green"></i>
                    </div>
                    <div>
                        <div>
                            <span class="fw-medium">Fecha</span>
                        </div>
                        <div>
                            <span>15 de Noviembre</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class=" rounded w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                    <div class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-cash"></i>
                    </div>
                    <div>
                        <div>
                            <span class="fw-medium">Precio</span>
                        </div>
                        <div>
                            <span>Gratuito</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class=" rounded w-100 text-start d-flex align-items-center p-3 bg-custom-white">
                    <div class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <div>
                            <span class="fw-medium">Ubicación</span>
                        </div>
                        <div>
                            <span>Centro Cívico</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="">
            <!-- Descripción -->
            <div class="bg-custom-white rounded p-4 mb-4">
                <h2>Descripción</h2>
                <p>
                    Únete a nuestro taller práctico donde aprenderás técnicas creativas para reutilizar
                    materiales reciclables. Durante la sesión, exploraremos diferentes métodos para transformar objetos cotidianos en piezas útiles y decorativas.
                </p>
                <p>
                    ¿Qué aprenderás?
                </p>
                <ul>
                    <li>Técnicas básicas de reciclaje creativo</li>
                    <li>Identificación de materiales reutilizables</li>
                    <li>Herramientas necesarias para cada proyecto</li>
                    <li>Tips para encontrar inspiración</li>
                </ul>
            </div>

            <!-- Materiales necesarios -->
            <div class="bg-custom-white rounded p-4 mb-4">
                <h2>Materiales necesarios</h2>
                <ul>
                    <li>Tijeras</li>
                    <li>Pegamento</li>
                    <li>Materiales reciclados (botellas, cartón, etc.)</li>
                    <li>Pinturas (opcional)</li>
                </ul>
            </div>

            <!-- Organizador -->
            <div class="col-6 bg-custom-white rounded p-4 mb-4 w-100">
                <h2>Organizado por</h2>
                <div class=" rounded w-100 text-start d-flex align-items-center p-3">
                    <div class="category-icon bg-light rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <div>
                            <span class="fw-medium">Asociación Figueres Sostenible</span>
                        </div>
                        <div>
                            <span>Organización medioambiental</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location map -->
            <div>
                <h2>Ubicación</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.654586885207!2d-122.4194152!3d37.7749295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808eaa87a1df%3A0x6d1e05e67e1f2b5c!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1614685456768!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <!-- Rating Section -->
            <div class="mb-5 mt-4">
                <!-- Overall Rating -->
                <div class="bg-custom-white rounded p-4 mb-4">
                    <h2 class="mb-4">Valoraciones</h2>
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center border-end">
                            <h3 class="display-4 fw-bold text-custom-green">4.8</h3>
                            <div class="mb-2">
                                <i class="fas fa-star star text-warning"></i>
                                <i class="fas fa-star star text-warning"></i>
                                <i class="fas fa-star star text-warning"></i>
                                <i class="fas fa-star star text-warning"></i>
                                <i class="fas fa-star star text-warning"></i>
                            </div>
                            <p class="text-muted">Basado en 45 valoraciones</p>
                        </div>
                        <div class="col-md-8 ps-4">
                            <!-- Rating Bars -->
                            <div class="rating-bars">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="me-2">5</span>
                                    <i class="fas fa-star text-warning me-2"></i>
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div class="progress-bar bg-custom-green" style="width: 80%"></div>
                                    </div>
                                    <span class="ms-2">36</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="me-2">4</span>
                                    <i class="fas fa-star text-warning me-2"></i>
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div class="progress-bar bg-custom-green" style="width: 15%"></div>
                                    </div>
                                    <span class="ms-2">7</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="me-2">3</span>
                                    <i class="fas fa-star text-warning me-2"></i>
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div class="progress-bar bg-custom-green" style="width: 3%"></div>
                                    </div>
                                    <span class="ms-2">1</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="me-2">2</span>
                                    <i class="fas fa-star text-warning me-2"></i>
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div class="progress-bar bg-custom-green" style="width: 2%"></div>
                                    </div>
                                    <span class="ms-2">1</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">1</span>
                                    <i class="fas fa-star text-warning me-2"></i>
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div class="progress-bar bg-custom-green" style="width: 0%"></div>
                                    </div>
                                    <span class="ms-2">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Review Section -->
                <div class="bg-custom-white rounded p-4 mb-4">
                    <h2 class="mb-3">Deja tu valoración</h2>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Tu puntuación</label>
                            <div class="rating-stars fs-3">
                                <i class="far fa-star text-warning me-1"></i>
                                <i class="far fa-star text-warning me-1"></i>
                                <i class="far fa-star text-warning me-1"></i>
                                <i class="far fa-star text-warning me-1"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <input type="hidden" id="ratingValue" name="ratingValue">

                        </div>
                        <div class="mb-3">
                            <label for="reviewTitle" class="form-label">Título de tu comentario</label>
                            <input type="text" class="form-control" id="reviewTitle" placeholder="Resume tu experiencia">
                        </div>
                        <div class="mb-3">
                            <label for="reviewComment" class="form-label">Tu comentario</label>
                            <textarea class="form-control" id="reviewComment" rows="4" placeholder="Cuéntanos más sobre tu experiencia..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom-green text-white">Publicar valoración</button>
                    </form>
                </div>

                <!-- Comments Section -->
                <div class="bg-custom-white rounded p-4">
                    <h2 class="mb-4">Comentarios</h2>

                    <!-- Individual Comment -->
                    <div class="border-bottom pb-4 mb-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="category-icon bg-light rounded-circle me-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">María García</h5>
                                    <div class="text-muted">
                                        <small>Hace 2 días</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                        <h6 class="mb-2">¡Experiencia increíble!</h6>
                        <p class="mb-0">El taller superó mis expectativas. Aprendí técnicas muy útiles para reciclar materiales que normalmente hubiera desechado. La instructora fue muy clara en sus explicaciones y el ambiente fue muy agradable.</p>
                    </div>

                    <!-- Another Comment -->
                    <div class="border-bottom pb-4 mb-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="category-icon bg-light rounded-circle me-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Carlos Ruiz</h5>
                                    <div class="text-muted">
                                        <small>Hace 5 días</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                        </div>
                        <h6 class="mb-2">Muy práctico y educativo</h6>
                        <p class="mb-0">Me gustó mucho la parte práctica del taller. Hubiera sido útil tener más tiempo para completar los proyectos, pero en general fue una experiencia muy positiva.</p>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center">
                        <button class="btn btn-outline-secondary">Cargar más comentarios</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>