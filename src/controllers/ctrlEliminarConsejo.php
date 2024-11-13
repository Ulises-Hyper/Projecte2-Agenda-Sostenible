<?php

function ctrlConsejosEliminar($tips){
    if (isset($_GET["id"])) {
        $id = (int)$_GET["id"];

        $tips->deleteTips($id);

        header(header: "Location: index.php?r=consejos&deleted=$id");
        exit;
    } else {
        header("Location: index.php?r=consejo&error=invalid_id");
        exit;
    }
}