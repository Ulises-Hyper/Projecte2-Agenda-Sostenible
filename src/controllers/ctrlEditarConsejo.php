<?php

function ctrlEditarConsejo($request, $response, $container) {
    // Recuperar el ID del parámetro GET
    $id = $request->get(INPUT_GET, "id");

    // Obtener el modelo de consejos (tips)
    $tipsModel = $container->Events();

    // Llamar a getTips y obtener el resultado
    $tips = $tipsModel->getTips($id);

    // Pasar los datos del consejo a la vista
    $response->set("tips", $tips);

    // Establecer la plantilla para la edición
    $response->setTemplate("editarconsejo.php");

    return $response;
}