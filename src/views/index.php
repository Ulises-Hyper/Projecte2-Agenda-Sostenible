<!DOCTYPE html>
<html lang="es">
<body>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Agenda Sostenible Figuerenca</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="/src/css/style.css">
    </head>
    <body class="bg-custom-green-lightest">
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
                        <i class="fas fa-user-circle fs-2"></i>
                        <span class="ms-2 d-none d-md-inline">Mi Cuenta</span>
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

        <!-- Hero Section -->
        <section class="bg-custom-green-light py-5">
            <div class="container d-md-flex align-items-center">
                <div class="col-md-6 pe-md-5">
                    <h1 class="text-custom-green-darkest fw-bold">Descubre un Figueres más Sostenible</h1>
                    <p>Únete a nuestra comunidad y participa en iniciativas que transforman nuestra ciudad.</p>
                    <div>
                        <button class="btn btn-lg p-6 bg-custom-green-darkest text-white me-2">Participar</button>
                        <button class="btn btn-lg p-6 border border-light">Saber más</button>
                    </div>
                </div>
                <div class="container mt-5">
                    <!-- Contenedor de la grilla con gap entre elementos -->
                    <div class="custom-grid-container">
                        <div class="custom-grid-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tree-fill mb-3 text-custom-green-dark" viewBox="0 0 16 16">
                                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777z"></path>
                            </svg>
                            <h3 class="mb-1">Proyectos Verdes</h3>
                            <p>Iniciativas ambientales locales</p>
                        </div>
                        <div class="custom-grid-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-recycle mb-3 text-custom-green-dark" viewBox="0 0 16 16">
                                <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z" />
                            </svg>
                            <h3 class="mb-1">Reciclaje</h3>
                            <p>Gestión de residuos</p>
                        </div>
                        <div class="custom-grid-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="mb-3 text-custom-green-dark" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M122.2 0C91.7 0 65.5 21.5 59.5 51.4L8.3 307.4C.4 347 30.6 384 71 384l217 0 0 64-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0 0-64 217 0c40.4 0 70.7-36.9 62.8-76.6l-51.2-256C574.5 21.5 548.3 0 517.8 0L122.2 0zM260.9 64l118.2 0 10.4 104-139 0L260.9 64zM202.3 168l-100.8 0L122.2 64l90.4 0L202.3 168zM91.8 216l105.6 0L187.1 320 71 320 91.8 216zm153.9 0l148.6 0 10.4 104-169.4 0 10.4-104zm196.8 0l105.6 0L569 320l-116 0L442.5 216zm96-48l-100.8 0L427.3 64l90.4 0 31.4-6.3L517.8 64l20.8 104z" />
                            </svg>
                            <h3 class="mb-1">Energía</h3>
                            <p>Soluciones renovables</p>
                        </div>
                        <div class="custom-grid-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="mb-3 text-custom-green-dark" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48 0 224 28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16L0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-80 0zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-208c0-8.8-7.2-16-16-16l-80 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                            </svg>
                            <h3 class="mb-1">Comunidad</h3>
                            <p>Colaboración ciudadana</p>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Eventos Destacados -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-custom-green-darkest fw-bold">Eventos Destacados</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bg-custom-green-medium p-4 text-center">
                                <h3 class="text-white fw-bold">15 NOV</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-custom-green-darkest">Taller de Reciclaje</h5>
                                <p class="card-text">Aprende técnicas efectivas de reciclaje y compostaje.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Centro Cívico</p>
                                    <button class="btn text-custom-green-dark d-flex align-items-center">
                                        <svg class="svg-inline--fa fa-calendar-plus me-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 232C237.3 232 248 242.7 248 256V304H296C309.3 304 320 314.7 320 328C320 341.3 309.3 352 296 352H248V400C248 413.3 237.3 424 224 424C210.7 424 200 413.3 200 400V352H152C138.7 352 128 341.3 128 328C128 314.7 138.7 304 152 304H200V256C200 242.7 210.7 232 224 232zM152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"></path>
                                        </svg>
                                        Inscribirse
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bg-custom-green-medium p-4 text-center">
                                <h3 class="text-white fw-bold">20 NOV</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-custom-green-darkest">Limpieza Comunitaria</h5>
                                <p class="card-text">Jornada de limpieza en el Parque Municipal</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i>  Parque Central</p>
                                    <button class="btn text-custom-green-dark d-flex align-items-center">
                                        <svg class="svg-inline--fa fa-calendar-plus me-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 232C237.3 232 248 242.7 248 256V304H296C309.3 304 320 314.7 320 328C320 341.3 309.3 352 296 352H248V400C248 413.3 237.3 424 224 424C210.7 424 200 413.3 200 400V352H152C138.7 352 128 341.3 128 328C128 314.7 138.7 304 152 304H200V256C200 242.7 210.7 232 224 232zM152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"></path>
                                        </svg>
                                        Inscribirse
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bg-custom-green-medium p-4 text-center">
                                <h3 class="text-white fw-bold">25 NOV</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-custom-green-darkest">Feria Sostenible</h5>
                                <p class="card-text">Mercado de productos locales y sostenibles</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Centro Cívico</p>
                                    <button class="btn text-custom-green-dark d-flex align-items-center">
                                        <svg class="svg-inline--fa fa-calendar-plus me-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 232C237.3 232 248 242.7 248 256V304H296C309.3 304 320 314.7 320 328C320 341.3 309.3 352 296 352H248V400C248 413.3 237.3 424 224 424C210.7 424 200 413.3 200 400V352H152C138.7 352 128 341.3 128 328C128 314.7 138.7 304 152 304H200V256C200 242.7 210.7 232 224 232zM152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"></path>
                                        </svg>
                                        Inscribirse
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Más eventos... -->
                </div>
            </div>
        </section>
        <!-- Call to Action -->
        <section class="bg-custom-green-medium pb-5 pt-5 text-light">
            <div class="container text-center pb-4 pt-4">
                <h2>¿Quieres ser parte del cambio?</h2>
                <p>Únete a nuestra comunidad y ayuda a construir un Figueres más sostenible. Cada pequeña acción cuenta.</p>
                <button class="btn bg-custom-green-darkest text-light px-4 py-2">Únete Ahora</button>
            </div>
        </section>
        <!-- Footer -->
        <footer class="bg-custom-green-darkest text-light footer">
            <div class="container">
                <div class="row py-4">
                    <!-- Columna 1 -->
                    <div class="col-md-3 col-sm-6 mb-3">
                        <h5 class="text-custom-white mb-3">Sobre Nosotros</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light text-decoration-none">Quiénes somos</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Nuestra misión</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Contacto</a></li>
                        </ul>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-md-3 col-sm-6 mb-3">
                        <h5 class="text-custom-white mb-3">Eventos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light text-decoration-none">Próximos eventos</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Calendario</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Inscripciones</a></li>
                        </ul>
                    </div>

                    <!-- Columna 3 -->
                    <div class="col-md-3 col-sm-6 mb-3">
                        <h5 class="text-custom-white mb-3">Recursos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light text-decoration-none">Blog</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Documentación</a></li>
                            <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</body>

</html>