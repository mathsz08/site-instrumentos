<?php
	if(isset($_GET['pedido'])){
		$compras = $_GET['pedido'];
	}else{
		$compras = 0;
	}
	$compras = explode(',', $compras);
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css_bts/bootstrap.min.css">
        <link rel="stylesheet" href="css/css.css">


        <link rel="preconnect" href="https://fonts.gstatic.com">

        <script type="text/javascript" src="../p1/js_bts/bootstrap.bundle.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap" 
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        
        <script>
                function abrirnav() {
                    document.getElementById("sidebar").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                }
                function fecharnav() {
                    document.getElementById("sidebar").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script> 


        <style>
            .formulario{
                flex-direction: column;
                margin: 5em;
                color: black;
                font-family: 'Playfair Display SC', serif;
                
            }
            .namee{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
                        
            }
            .emaill{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .senhaa{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .cpff{
            -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .radioo{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .submitt{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .cidade{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .dataa{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }
            .cupomm{
                -webkit-appearance: none;
                display: block;
                border: 0;
                padding: 0.75em 1em;
                border: solid 1px #dddddd;
                background: #fff;
                width: 100%;
            }            
        </style>

        
        
    </head>
    <body>
    <div id="sidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="fecharnav()">&times;</a>
            <a href="#">Perfil</a>
            <a href="#">Configurações</a>
            <a href="#">Pedidos</a>
            <a href="#">Sair</a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
                    <a onclick="abrirnav()" class="openbtn"><img class="openbtn" src="imagem/icon_user.png"></a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a style="color: #f1af09;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Instrumentos de Cordas
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Acessorios</a></li>
                                <li><a class="dropdown-item" href="#">Amplificadores</a></li>
                                <li><a class="dropdown-item" href="#">Pedais e Pedaleiras</a></li>
                                <li><a class="dropdown-item" href="#">Instrumentos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: #f1af09;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Instrumentos de Sopro
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Acessorios</a></li>
                                <li><a class="dropdown-item" href="#">Instrumentos</a></li> 
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: #f1af09;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Instrumentos Eletronicos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Acessorios</a></li>
                                <li><a class="dropdown-item" href="#">Cabos</a></li>
                                <li><a class="dropdown-item" href="#">Mesas & Mixers</a></li>
                                <li><a class="dropdown-item" href="#">Microfone</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: #f1af09;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Instrumentos de percurssão 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Acessorios</a></li>
                                <li><a class="dropdown-item" href="#">Baterias</a></li>
                                <li><a class="dropdown-item" href="#">Ferragens</a></li>
                                <li><a class="dropdown-item" href="#">Pratos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: #f1af09;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pianos e Teclados
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Acessorios</a></li>
                                <li><a class="dropdown-item" href="#">Synths</a></li>
                                <li><a class="dropdown-item" href="#">Pianos</a></li>
                                <li><a class="dropdown-item" href="#">Eletronicos</a></li>
                            </ul>
                        </li>
                            
                    </ul>
                    <a class="navbar-brand" href="#"><img class="icon_piano"src="imagem/icon_piano.png"></a>
                    </div>
            </div>
        </nav>
        <main>
            <h2>carrinho de compras</h2>
            <div class="formulario">

            <form name="teste" id="dados_cliente">
                <div class="namee">
                
                    <label for="nomeid">Nome: </label>
                    <input type="text" size="24" id="nomeid">
                </div>

                <div class="emaill">  
                <label for="emailid">Email: </label>
                <input type="text" size="24" id="emailid">
                </div>  

                <!-- <div class="senhaa"> 
                <label for="senhaid">Senha: </label>
                <input type="password" size="12" id="senhaid">
                </div>  -->

            <div class="cidade">
                
                    <label for="endid">Cidade: </label>
                    <input type="text" size="24" id="cidadeid">
            </div>

            <div class="cpff">  
                    <label for="cpfid">CPF: </label>
                    <input type="text" size="12" id="cpfid">
                </div>  
                <div class="cupomm">
                        <label for="cupomid">Cupom de Desconto(opcional): </label>
                        <input type="text" size="15" id="cupomid">
                </div>

                <div class="radioo"> 
                    <input type="radio" id="credi" name="paga" value="crédito"/>
                    <label for="credi">Crédito</label><br>
                    <input type="radio" id="debi" name="paga" value="débito"/>
                    <label for="debi">Débito</label><br>
                    <input type="radio" id="boleto" name="paga" value="boleto"/checked>
                    <label for="outros">Boleto</label><br>
                </div>  

                <div class="check-box">

                    <input type="checkbox" id="confi" value="yes" >
                    <label form="confi">Li os termos de Requisto da Compra</label>

                </div>  

        </form>

                <div class="submitt"> 
                    <button id="botao_click" name="botão legal">Enviar</button>
                </div>  


            
        </main>
        <footer>
          <p>&copy; Copyright Loja de Instrumentos - 2021</p>
        </footer>
        <script src="js/conferir.js"></script>
        <script src="js/index.js"></script>
        <script src="js/send.js"></script>
    </body>
</html>