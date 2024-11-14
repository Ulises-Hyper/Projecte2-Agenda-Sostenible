<?php

function ctrlEventUpdateEdit($request, $response, $container)
{
    $eventModel = $container->Events();
    $id = $request->get(INPUT_GET, "id");

    $events = $eventModel->getEditEvent($id);
 
    $response->set('events', $events);
    $response->setTemplate('eventedit.php');

    return $response;
}
