<?php 

function ctrlEventDelete($events){
    if (isset($_GET['id'])){
        $id = (int)$_GET["id"];
        $events->delete($id);
        
        header(header: "Location: index.php?r=eventos&delete=$id");
        exit;
    } else {
        header("Location: index.php?r=event&error=invalid_id");
        exit;
    }
}