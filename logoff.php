<?php

    session_start();
    session_destroy();
    $id = $_GET['p'];
    header("Location:$id");
    
?>