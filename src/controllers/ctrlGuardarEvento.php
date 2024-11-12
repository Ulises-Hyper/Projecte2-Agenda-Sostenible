<?php

function ctrlGuardarEvento($request, $response, $container){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $event_title = $request->get(INPUT_POST, "event_title");
        $event_description = $request->get(INPUT_POST, "event_description");
        $event_location = $request->get(INPUT_POST, "event_location");
        $event_type = $request->get(INPUT_POST, "event_type"); 
        $event_comment = $request->get(INPUT_POST, "event_comment");
        $date_start = $request->get(INPUT_POST, "date_start");
        $date_end = $request->get(INPUT_POST, "date_end");

        $eventModel = $container->Events();
        $eventModel->addEvent($event_title, $event_description, $event_location, $event_type, $event_comment, $date_start, $date_end);
    }
    
    $response->redirect("Location: index.php?r=eventos");  
    return $response;

}