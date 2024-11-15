<?php

function ctrlEventUpdate($request, $response, $container)
{
    $id = $request->get(INPUT_POST, 'event_id'); // O el método para obtener el ID del evento que quieres actualizar

    // Recoge los datos enviados desde el formulario para la actualización

    $event_title = $request->get(INPUT_POST, 'event_title');
    $event_type = $request->get(INPUT_POST, 'event_type');
    $event_description = $request->get(INPUT_POST, 'event_description');
    $event_location = $request->get(INPUT_POST, 'event_location');
    $date_start = $request->get(INPUT_POST, 'date_start');
    $date_end = $request->get(INPUT_POST, 'date_end');

    // Llama al modelo para actualizar los datos
    $eventModel = $container->Events();

    $currentEvent = $eventModel->getEditEvent($id);

    if (!$currentEvent) {
        return $response->redirect("Location: index.php?r=consejos");
    }

    $event_title = $event_title ?: $currentEvent['event_title'];
    $event_type = $event_type ?: $currentEvent['event_type'];
    $event_description = $event_description ?: $currentEvent['event_description'];
    $event_location = $event_location ?: $currentEvent['event_location'];
    $date_start = $date_start ?: $currentEvent['date_start'];
    $date_end = $date_end ?: $currentEvent['date_end'];

    $updateSuccess = $eventModel->update($id, $event_title, $event_type, $event_description, $event_location, $date_start, $date_end);


    if ($updateSuccess) {
        $response->redirect("Location: index.php?r=eventos");
    } else {
        $response->redirect("Location: index.php?r=eventos&error");
    }

    return $response;
}