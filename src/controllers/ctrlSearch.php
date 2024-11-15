<?php

function ctrlSearch($request, $response, $container) {
    // Obtiene el valor de búsqueda
    $busqueda = $_GET['searchInput'];

    // Llama al modelo para realizar la búsqueda
    $searchModel = $container->Events();
    $search = $searchModel->getByTitle($busqueda);

    // Establece los datos en la respuesta y renderiza la plantilla
    $response->set('searchs', $search);
    $response->setTemplate("resultados_busqueda.php");

    return $response;
}