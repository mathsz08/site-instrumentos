<?php
    $cont=0;
    $total=0;
	if(isset($_GET['pedido'])){
		$compras = $_GET['pedido'];
	}else{
        $compras=0;
    }
	$compras = explode(',', $compras);

    if(isset($_GET['nome'])){
		$nome= $_GET['nome'];
	}
    $nome = str_replace("20%"," ",$nome);

    if(isset($_GET['cidade'])){
		$cidade = $_GET['cidade'];
	}

    if(isset($_GET['desconto'])){
        $desconto= $_GET['desconto'];
        $desconto = intval($desconto);
        echo("O valor do desconto é ".$desconto);
        
    }
	
    $cidade = str_replace("20%"," ",$cidade);
    
    //////////////////////////////////


   $arquivo = date("H_d-m-y");

   $txt= fopen($arquivo.".txt","w");
   if ($txt==false)
   {
       die("Problema ao gerar o arquivo txt");
   }
   fwrite($txt,$cidade.", ".date("d")." de ".date("M")." de ".date("Y")."\n");

   fwrite($txt,"Nome: ".$nome. "\n");

   fwrite($txt,"\n Instrumentos escolhidos \n");

   $json= file_get_contents('Json.json');
   $instrumentos = json_decode($json);
   foreach($instrumentos as $json)
   {
       if(!$compras[$cont]==0)
       {
        $valor = $json->preco;
        $valor = $compras[$cont] * $valor;
        $total = $total + $valor;
        $valor = number_format($valor,2,",",".");
        fwrite($txt,$json->nome.$json->$valor.", Quantidade: ".$compras[$cont].", Valor do produto: ".$valor."\n");
       }
       $cont++;
    
   }
   $total=$total-$desconto;
   fwrite($txt,"\n Valor do desconto: ".$desconto."\n Valor Total a ser pago:".number_format($total,2,",","."));
   fclose($txt);
   echo '<script>alert("Recibo imprimido com sucesso"); window.location.href = "index.php";</script>';





?>