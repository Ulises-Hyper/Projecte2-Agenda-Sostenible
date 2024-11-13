<?php

function ctrlEventUpdateEdit($request, $response, $container)
{
    $eventModel = $container->Events();

    $events = $eventModel->getEditEvent();

    $response->set("event", $events);
    $response->setTemplate("eventos.php");

    return $response;
}
