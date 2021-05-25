<?php

    session_start();
    $mydate = getdate(date('U'));
    $dia = " $mydate[mday]/$mydate[month]/ $mydate[year]";

    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';

    $conn = new mysqli($servername,$user,$pass,$bd);
    $sqlpedido = "INSERT INTO pedido (id_cliente,valor_total,dia_compra) VALUES(".$_SESSION['id_usu'].",".$_SESSION['valor'].", '" . $dia . "')"; 
    $conn -> query($sqlpedido);
    $idpedido = $conn->insert_id;
    for($i = 0; $i <= count($_SESSION['carrinho'])-1;$i++){
        $sqlprodped = "INSERT INTO prod_ped(id_prod,qntd, id_pedido)
        VALUES('".$_SESSION['carrinho'][$i]."','1','". $idpedido."')";
        if ($conn -> query($sqlprodped) === TRUE) {
            for($i = 0; $i <= count($_SESSION['carrinho'])-1;$i++){
                unset($_SESSION['carrinho'][$i]);
            }
            header("Location: index.php");
        }else {
            echo "Error: " . $sqlprodped . "<br>" . $conn->error;
        }
    }



?>