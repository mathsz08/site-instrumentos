
<html>
    

    <?php
        session_start();
        $arr = ['cpf','email','nome','telefone','cidade','rua','bairro']; 

        $servername = 'localhost';
        $user ='root';
        $pass = '';
        $bd = 'li';
        $conn = new mysqli($servername,$user,$pass,$bd);


        for($i = 0; $i<= count($arr)-1;$i++ ){
            if(isset($_POST[$arr[$i]])){
                
                $val = $_POST[$arr[$i]];
                $lug = $arr[$i];
                echo "<p>".$_POST[$arr[$i]]."</p>" ;
                echo "<p>".$arr[$i]."</p>" ;
            }         
        }
        $sql =  "UPDATE cliente SET $lug = '".$val."'  WHERE id_cliente = ".$_SESSION['id_usu'].";";
        echo $sql;
        $conn -> query($sql);
        echo "Error: " . $sql . "<br>" . $conn->error;

        header("Location: perfil.php?id=".$_SESSION['id_usu']);
    ?>
</html>