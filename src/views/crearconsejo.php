<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Consejo</title>
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
        <div class="col-md-6 mt-3 mb-3 bg-custom-white p-4 rounded">
            <h2 class="fs-3 fw-bold text-custom-green-darkest text-center">Añadir Consejo</h2>
            <form action="index.php?r=guardarconsejo" method="POST">
                <!-- Campo Título -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control input-highlight" id="titulo" name="titulo" placeholder="Ej: Reducir el uso de plástico" required>
                </div>

                <!-- Campo Descripción Breve -->
                <div class="mb-3">
                    <label for="descripcion_breve" class="form-label">Descripción Breve</label>
                    <input type="text" class="form-control input-highlight" id="descripcion_breve" name="descripcion_breve" placeholder="Breve introducción del consejo" required>
                </div>

                <!-- Campo Texto Explicativo -->
                <div class="mb-3">
                    <label for="texto_explicativo" class="form-label">Texto Explicativo</label>
                    <textarea class="form-control input-highlight" id="texto_explicativo" name="texto_explicativo" rows="6" placeholder="Describe detalladamente el consejo en formato Markdown" required></textarea>
                </div>

                <!-- Campo Etiquetas/Hashtags -->
                <div class="mb-3">
                    <label for="hashtags" class="form-label">Etiquetas/Hashtags</label>
                    <input type="text" class="form-control input-highlight" id="hashtags" name="hashtags" placeholder="Ej: #ecología, #sostenibilidad" required>
                    <small class="form-text">Usa comas para separar las etiquetas, por ejemplo: #ecología, #sostenibilidad</small>
                </div>

                <!-- Botón de Envío -->
                <button type="submit" class="btn bg-custom-green-darkest text-white border-2 w-100">Guardar Consejo</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>