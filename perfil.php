<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css_bts/bootstrap.min.css">
    <link rel="stylesheet" href="css/perfil.css">

    <script type="text/javascript" src="../p1/php/index.js"></script>
    
    <script type="text/javascript" src="../p1/js_bts/bootstrap.bundle.js"></script>

    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta name="viewport" content= "height=device-height, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
        var arr = ['cpf','email','nome','telefone','cidade','rua','bairro']; 
        
        function bot(){
            document.getElementById("textoteste").innerHTML = document.getElementsByTagName('label').namedItem('rua');
            for(var i = 0; i<= arr.length; i++){
                
            }
              
        }

    </script>

    <style>
        .but{
            margin: 0px 0px 5% 0px;
            width: 15%;
            height:30%;
            border-radius:5px;
            background-color: white;
            border: solid 1px black;
            font-family: 'Cinzel', serif;

        }
        .but:hover{
            transform: scale(1.05);
            border: 1px solid #f1af09;
        }
    </style>


    <title>Loja de Instrumentos</title>
</head>
    <body>
        <div id="sidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="fecharnav()">&times;</a>
            <?php

            session_start();

                if(!isset($_SESSION['user'])|| $_SESSION['logado'] != TRUE){
                    echo "<a href= Login.php?p=".$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'].">Login</a>";
                    echo "<a href=Login.php'>Cadastre-se</a>";
                }else{
                    echo "<a href='#'> Olá, ".$_SESSION['user']."</a>";
                }
                if(isset($_SESSION['id_usu'])){
                    echo "<a href='perfil.php?id=".$_SESSION['id_usu']."'>Perfil</a>
                    <a href='#'>Configurações</a>";
                }else{
                    echo "<a href= Login.php?p=".$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'].">Perfil</a>";
                }
                echo "<a href=logoff.php?p=index.php>Sair</a>" 
            ?>
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
                                <li><a class="dropdown-item" href="catalogo.php?tipo=acess_cord">Acessorios</a></li>
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
                    <a class="navbar-brand" href="index.php"><img class="icon_piano"src="imagem/icon_piano.png"></a>
                </div>
            </div>
        </nav>

        <!-- Fim nav bar começo Perfil--->

        <div class="mainpepe d-flex justify-content-center ">
            <div class="row perfilcontainer">
                <?php
                    $servername = 'localhost';
                    $user ='root';
                    $pass = '';
                    $bd = 'li';
                    $conn = new mysqli($servername,$user,$pass,$bd);
                    $sql = "SELECT * FROM cliente WHERE id_cliente = ".$_SESSION['id_usu'] ;
                    $dados = $conn -> query($sql);

                    if($dados ->num_rows > 0){
                        while($row = $dados -> fetch_assoc()){
                            echo "<center><img class='foto' src='imagem/imagem-do-usuario-com-fundo-preto.png'></center>
                            <h1 class='username'>".ucfirst($row['nome'])."</h1>
                    
                            </div>
                                
                            </div>
                            <center><h1 style='margin-bottom: 50px;'> Suas Informações  </h1></center>
                            <div class='table_container d-flex justify-content-center'>
                                <table class='table'>
                                    <thead>
                                        <th colspan='5'>Informações Pessoais</th> 
                                        <th></th>
                                    </thead>
                                    <tr>
                                        <td colspan='4'>Nome: </td>
                                        <td>".$row['nome']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='nome()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>CPF : </td>
                                        <td>".$row['cpf']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='cpf()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>Telefone: </td>
                                        <td>".$row['telefone']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='telefone()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>E- mail:  </td>
                                        <td>".$row['email']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='email()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td colspan='6'>Endereço </td>

                                    </tr>
                                    <tr >
                                        <td >Cidade: </td>
                                        <td>".$row['cidade']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='cidade()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                        <td >Bairro: </td>
                                        <td>".$row['bairro']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='bairro()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan='4' >Rua: </td>
                                        <td >".$row['rua']."</td>
                                        <td><button  type='button' class='btn ' data-bs-toggle='modal' onClick='rua()' data-bs-target='#exampleModal'>
                                                <img  class='imgbnt' src='imagem/pencil.png'>
                                            </button>
                                        </td>
                                    </tr>
                                </table>     
                                
                            </div>";
                        }
                    }
                ?>    
                <!-- Button trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Altere as informações</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form name ='form'action="add_dados.php" method="POST">
                                <div class="modal-body" id='teste' >
                                
                                    <script>
                                        function cpf(){
                                            document.getElementById("teste").innerHTML = "<center><label>CPF: <input name ='cpf' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function email(){
                                            document.getElementById("teste").innerHTML = "<center><label>Email: <input name ='email' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function nome(){
                                            document.getElementById("teste").innerHTML = "<center><label>Nome: <input name ='nome' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function telefone(){
                                            document.getElementById("teste").innerHTML = "<center><label>Telefone: <input name ='telefone' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function cidade(){
                                            document.getElementById("teste").innerHTML = "<center><label>Cidade: <input name ='cidade' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function rua(){
                                            document.getElementById("teste").innerHTML = "<center><label>Rua: <input name ='rua' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                        function bairro(){
                                            document.getElementById("teste").innerHTML = "<center><label>Bairro: <input name = 'bairro' id = 'dado' type = 'text'></input></label></center>";
                                        }
                                    </script>
                                 
                                </div>
                                <div class="modal-footer" style="justify-content: center;">
                                    <p id = "textoteste" >Precione Enter Para Confirmar</p>
                                </div>
                            </form >
                        </div>
                    </div>
                </div>
                <center><p>ou </p></center>
                <center><button>Apague sua conta</button></center>
        <footer>
            <p>&copy; Copyright Loja de Instrumentos - 2021</p>
        </footer>
    </body>
</html>

            