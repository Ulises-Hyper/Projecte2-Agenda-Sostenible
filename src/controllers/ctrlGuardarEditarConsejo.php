<?php

function ctrlGuardarEditarConsejo($request, $response, $container) {
    // Obtener los datos enviados por el formulario
    $id = $request->get(INPUT_POST, "id");
    $title = $request->get(INPUT_POST, "titulo");
    $brief_description = $request->get(INPUT_POST, "descripcion_breve");
    $explanatory_text = $request->get(INPUT_POST, "texto_explicativo");
    $hashtags = $request->get(INPUT_POST, "hashtags");

    // Obtener el modelo de consejos (tips)
    $tipsModel = $container->Events();

    // Obtener los datos actuales del consejo en caso de que algunos campos sean nulos
    $currentTips = $tipsModel->getTips($id);

    // Verificar que el consejo exista en la base de datos
    if (!$currentTips) {
        // Si el consejo no existe, redirigir a la lista de consejos
        return $response->redirect('Location: index.php?r=consejos');
    }

    // Usar los valores actuales si algún campo está vacío
    $title = $title ?: $currentTips['title'];
    $brief_description = $brief_description ?: $currentTips['brief_description'];
    $explanatory_text = $explanatory_text ?: $currentTips['explanatory_text'];
    $hashtags = $hashtags ?: $currentTips['hashtags'];

    // Intentar actualizar los datos en la base de datos
    $updateSuccess = $tipsModel->updateTip($id, $title, $brief_description, $explanatory_text, $hashtags);

    // Verificar si la actualización fue exitosa
    if ($updateSuccess) {
        // Redirigir a la lista de consejos si la actualización fue exitosa
        $response->redirect('Location: index.php?r=consejos');
    } else {
        // Redirigir a una página de error o mostrar un mensaje
        $response->redirect('Location: index.php?r=consejos&error');
    }

    return $response;
}