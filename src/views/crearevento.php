<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrearEvento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/src/css/style.css">
    <script src="/src/js/main.js"></script>
</head>

<body class="bg-custom-green-lightest">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6 mt-3 mb-3">
            <h2 class="fs-3 fw-bold text-custom-green-darkest text-center">Añadir Evento</h2>
            <form action="index.php?r=guardarevento" method="POST" class="bg-custom-white p-4 rounded shadow">
                <div class="mb-3 row">
                    <div class="col">
                        <label for="titulo" class="form-label">Título del Evento</label>
                        <input type="text" class="form-control" id="titulo" name="event_title" required>
                    </div>
                    <div class="col">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="event_type" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="event_description" rows="3" required></textarea>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="event_image">
                    </div>
                    <div class="col">
                        <label for="comentario" class="form-label">Comentario</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="comentario" name="event_comment">
                            <label class="form-check-label" for="comentario">
                                Marcar si Quieres comentarios.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="event_location" required>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                        <input type="date" class="form-control" id="fecha_inicio" name="date_start" required>
                    </div>
                    <div class="col">
                        <label for="fecha_final" class="form-label">Fecha Final</label>
                        <input type="date" class="form-control" id="fecha_final" name="date_end" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" class="form-control" id="hora" name="" required>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="index.php/?r=eventos" class="btn btn-custom-green-light">Cancelar</a>
                        <button type="submit" class="btn btn-custom-green">Guardar Cambios</button>
                    </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>