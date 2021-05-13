<script type="text/javascript" src="../php/index.js">

</script>

<?php
    $var = "<script type='text/javascript' src='../php/index.js'> document.write(gui)></script>";
    $var2 = "foi"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF-8">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/css.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap" 
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <div class="header">
                <h1>Loja de Instrumentos</h1>
            </div>
        </header>
        <main>
            <h2>carrinho de compras</h2>
            <div>
                <?php
                    $arq = file_get_contents("Json.json");
                    $json = json_decode($arq);
                    foreach($json as $instrumentos){
                        echo $instrumentos->nome;
                    }
                ?>
            </div>

        </main>
        <footer>
            <p>&copy; Copyright Loja de Instrumentos - 2021</p>
        </footer>
    </body>
</html>