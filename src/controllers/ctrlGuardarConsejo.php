<?php

// titulo: Reducir el uso de plástico
// descripcion_breve: Introducción al consejo sobre la reducción del uso de plástico
// texto_explicativo: # Reducción del plástico
// hashtags: #ecología, #sostenibilidad, #naturaleza

function ctrlGuardarConsejo($request, $response, $container)
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $title = $request->get(INPUT_POST, "titulo");
        $brief_description = $request->get(INPUT_POST, "descripcion_breve");
        $explanatory_text = $request->get(INPUT_POST, "texto_explicativo");
        $hashtags = $request->get(INPUT_POST, "hashtags");

        $tipsModel = $container->Events();

        $tipsModel->addTips($title, $brief_description, $explanatory_text, $hashtags);
    }

    $response->redirect("Location: index.php?r=consejos");
    return $response;
}
