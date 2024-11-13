<?php

function ctrlEventUpdate($request, $response, $container) {
    $events = $container->Events();
    $id = $request->get(INPUT_POST, 'event_id'); // Se obtiene el ID del usuario desde el formulario

    // Obtener todos los datos del formulario
    $event = [
        'event_title' => $request->get(INPUT_POST, 'event_title'),
        'event_type' => $request->get(INPUT_POST, 'event_type'),
        'event_description' => $request->get(INPUT_POST, 'event_description'),
        'event_img' => $request->get(INPUT_POST, "eventimg") ?: null,
        'event_comment' => $request->get(INPUT_POST, 'event_comment'),
        'event_location' => $request->get(INPUT_POST, "event_location"),
        'date_start' => $request->get(INPUT_POST, "date_start"),
        'date_end' => $request->get(INPUT_POST, "date_end"),
        //'event_hour' => $request->get(INPUT_POST, "event_hour"),
    ];

    // Llama a la función update en el modelo Users
    $events->update($id, $event);

    header("Location: /index.php?r=eventos&status=success");
    exit();
}