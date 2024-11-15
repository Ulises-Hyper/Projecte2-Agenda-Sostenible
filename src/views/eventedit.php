<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Evento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/src/css/style.css">
</head>
<body class="bg-custom-green-lightest">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 mt-3 mb-3">
      <h2 class="fs-3 fw-bold text-custom-green-darkest text-center">Editar Evento</h2>
      <form action="index.php?r=eventupdate" method="POST" class="bg-custom-white p-4 rounded shadow">
        <input type="text" hidden name="event_id" value="<?= htmlspecialchars($events['event_id']); ?>">
        <div class="mb-3 row">
          <div class="col">
            <label for="titulo" class="form-label">Título del Evento</label>
            <input type="text" class="form-control" id="titulo" name="event_title" value="<?= htmlspecialchars($events['event_title']) ?>" required>
          </div>
          <div class="col">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="event_type" value="<?= htmlspecialchars($events['event_type']) ?>" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea class="form-control" id="descripcion" name="event_description" rows="3"required><?= htmlspecialchars($events['event_description']) ?> </textarea>
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
          <input type="text" class="form-control" id="ubicacion" name="event_location" value="<?= htmlspecialchars($events['event_location']) ?>" required>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="date_start" value="<?= date('Y-m-d', strtotime($events['date_start'])) ?>" required>
          </div>
          <div class="col">
            <label for="fecha_final" class="form-label">Fecha Final</label>
            <input type="date" class="form-control" id="fecha_final" name="date_end" value="<?= date('Y-m-d', strtotime($events['date_end'])) ?>" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Hora</label>
          <input type="time" class="form-control" id="hora" name="event_time">
        </div>
        <div class="d-flex justify-content-between mt-4">
          <a href="index.php/?r=eventos" class="btn btn-custom-green-light">Cancelar</a>
          <button type="submit" class="btn btn-custom-green">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
