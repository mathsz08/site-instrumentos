<?php
    session_start();

    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';
    $conn = new mysqli($servername,$user,$pass,$bd);

    $sql = "DELETE FROM cliente WHERE id_cliente = ".$_SESSION['id_usu'].";";
    $conn -> query($sql);
    session_destroy();
    header("Location:index.php")
?>