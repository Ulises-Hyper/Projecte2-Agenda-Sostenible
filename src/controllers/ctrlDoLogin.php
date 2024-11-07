<?php

function ctrlDoLogin($request, $response, $container){
    $user = $request->get(INPUT_POST,"username");
    $pass = $request->get(INPUT_POST,"password");
    
    $modeluser = $container->Users();
    $exist = $modeluser->getUserLogin($user, $pass);

    if($exist){
        $response->setSession('user', $exist);
        $response->redirect('Location: index.php');
    }

    return $response;
}