<?php
    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';
    $conn = new mysqli($servername,$user,$pass,$bd);

    $sql = "INSERT INTO cliente(cpf,nome,senha,email,data_nasc,telefone,rua,cidade,bairro) 
    VALUES( '".$_POST['cpf']."',  '".$_POST['nome']."', '".$_POST['senha']."',  '".$_POST['email']."',  '".$_POST['data_nasc']."',  '".$_POST['telefone']."',  '".$_POST['rua']."',  '".$_POST['cidade']."',  '".$_POST['bairro']."');";
    $conn -> query($sql);
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: index.php")
?>