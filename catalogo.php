<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/css_catalogo.css">
        <link rel="stylesheet" href="css_bts/bootstrap.min.css">

        <script type="text/javascript" src="../p1/php/index.js"></script>
        <script type="text/javascript" src="../p1/js_bts/bootstrap.bundle.js"></script>


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
        <div id="sidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="fecharnav()">&times;</a>
            <?php

                session_start();

                if(!isset($_SESSION['user'])|| $_SESSION['logado'] != TRUE){
                    echo "<a href= Login.php?p=".$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'].">Login</a>";
                    echo "<a href=Login.php'>Cadastre-se</a>";
                }else{
                    echo "<a href='#'> Ola ".$_SESSION['user']."</a>";
                }
            ?>
            <a href="#">Perfil</a>
            <a href="#">Configurações</a>
            <a href="#">Pedidos</a>
            <?php echo "<a href=logoff.php?p=".$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'].">Sair</a>" ?>
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
                <a class="navbar-brand" href="index.php"><img class="icon_piano"src="imagem/icon_piano.png"></a>
                </div>
            </div>
        </nav>
        <body>
            <main class="main" id="main">
                <div>
                    <div>Filtros</div>
                </div>
                <div class="instrumentos">
                    <?php

                        $tipo = $_GET['tipo'];
                        $servername = 'localhost';
                        $user ='root';
                        $pass = '';
                        $bd = 'loja_instrumentos';

                        $conn = new mysqli($servername,$user,$pass,$bd);
                        $sql = "SELECT * FROM acessorios";
                        $dados = $conn->query($sql);


                        if($dados -> num_rows > 0){
                            while($row = $dados->fetch_array()){
                                $id = $row["id_acess"];
                                echo"
                                <li style='list-style:none'>

                                    <a style='text-decoration: none;' href=produto.php?n=$id>
                                        <p>".$row['nome'] ."</p>
                                        <center><img src='".$row['img']."'></center>
                                        <p> R$  ".$row['preco'].".00 </p>
                                    </a>
                                </li>";
                            }
                        }
                    ?>
                </div>
            </main>
        
        </body>






</html>