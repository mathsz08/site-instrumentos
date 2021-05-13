<?php


    session_start();

    $log = "v";
    $sen = "2";
    $msg = FALSE;
    $id = $_GET['p'];
    echo $id;
    if($_POST["login"] == $log && $_POST["senha"] == $sen){
        $msg = TRUE;
    }
    if($msg){
        $_SESSION["logado"] = true;
        $_SESSION["user"] = $_POST["login"];

        header("Location: $id");
    }
    else{
        header("Location: Login.php");
    }
?>
