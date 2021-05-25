<?php
    session_start();
    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';

    $qnt = intval($_POST['qnt']);
    $id = intval($_GET["n"]);
    for($i = 0; $i <= $qnt-1; $i++){
        array_push($_SESSION['carrinho'],$id );
    }
    
    
    header("Location: produto.php?n=".$id)

?>