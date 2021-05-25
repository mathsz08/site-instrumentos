<?php


    session_start();
    $msg = FALSE;
    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';
    $conn = new mysqli($servername,$user,$pass,$bd);
    $sql = "SELECT id_cliente,email,senha,nome FROM cliente ";
    $dados = $conn -> query($sql);

    if($dados -> num_rows > 0){
        while($row = $dados ->  fetch_assoc()){
            if($_POST["login"] == $row['email'] && $_POST["senha"] == $row['senha']){
                $msg = TRUE;
                $nome = $row['nome'];
                $_SESSION["id_usu"] = $row['id_cliente'];
                $_SESSION['carrinho'] = array();
                $_SESSION['valor'] = 0;
            }
        }
    }

    
    $id = $_GET['p'];
    echo $id;
    if($msg){
        $_SESSION["logado"] = true;
        $_SESSION["user"] = $nome;

        header("Location: $id");
    }
    else{
        header("Location: Login.php");
    }
?>
