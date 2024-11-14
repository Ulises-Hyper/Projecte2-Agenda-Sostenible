<?php

function ctrlEventUpdate($request, $response, $container) {

    $events = $container->Events();
    $id = $request->get(INPUT_POST, "event_id");
    if (!$id) {
        // Si no se pasa el event_id, lanzar un error o redirigir a otra página
        echo "No se encontró el ID del evento.";
        exit();
    }
    // Obtener todos los datos del formulario
    $event = [
        'event_title' => $request->get(INPUT_POST, 'event_title'),
        'event_type' => $request->get(INPUT_POST, 'event_type'),
        'event_description' => $request->get(INPUT_POST, 'event_description'),
        'event_img' => $request->get(INPUT_POST, "event_img") ?: null,
        'event_comment' => $request->get(INPUT_POST, 'event_comment'),
        'event_location' => $request->get(INPUT_POST, "event_location"),
        'date_start' => $request->get(INPUT_POST, "date_start"),
        'date_end' => $request->get(INPUT_POST, "date_end"),
    ];

    // Llama a la función update en el modelo Users
    $events->update($id, $event);

    header("Location: /index.php?r=eventos&status=success");
    exit();
}