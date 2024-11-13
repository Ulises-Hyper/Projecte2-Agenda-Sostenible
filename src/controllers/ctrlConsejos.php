<?php

function ctrlConsejos($request, $response, $container){

    $tipsModel = $container->Events();
    $tips = $tipsModel->getAllTips();

    $response->set("tips", $tips);
    $response->setTemplate("consejos.php");
    
    return $response;
}