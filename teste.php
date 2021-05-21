<?php 
    $servername = 'localhost';
    $user ='root';
    $pass = '';
    $bd = 'li';

    $conn = new mysqli($servername,$user,$pass,$bd);

    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    
    
    $sql = "INSERT INTO produtos(nome,img,valor,tipo)
    VALUES('Correia Basso de Camurça Preta Dg04','./imagem/tira2.png',70,'acess_cord');";
    $sql .= "INSERT INTO rodutos(nome,img,valor,tipo)
    VALUES('Correia Vt Sl 82 Basso','./imagem/tira1.png',70,'acess_cord');";
    $sql .= "INSERT INTO rodutos(nome,img,valor,tipo)
    VALUES('Pedal Green Mile - Overdrive Mooer','./imagem/pedal2.png',450,'acess_cord');";
    $sql .= "INSERT INTO rodutos(nome,img,valor,tipo)
    VALUES('Pedal de Distorção para Guitarra LT Dist Blackstar','./imagem/pedal1.png',550,'acess_cord');";
    $sql .= "INSERT INTO rodutos(nome,img,valor,tipo)
    VALUES('Pedal para Guitarra DS 1 Distortion Boss','./imagem/pedal3.png',600,'acess_cord');";



    if($conn -> multi_query($sql) ===TRUE){
        echo "New records created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>



