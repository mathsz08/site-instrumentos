<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/css_login.css">
    </head>
    <body>
        <main  class="main">
            

            <div class="square">
                <div class="div_form">
                    <h1>Loja de Instrumentos</h1>
                    <?php
                    $id = $_GET['p'];
                    echo"
                        <form method='POST' action='validaLogin.php?p=".$id."'  id='form' name='form'>
                            <div class='entries'>
                                <label for='login'> Login: <input type='text' id='login' name='login'></label>
                            
                            
                                <label class='login_senha' for='senha'> Senha: <input type='password' id='senha' name='senha'></label>
                            </div>
                            <center><button class='but_log' type='submit'>Login</button></center>
                            
                        </form>"
                ?>
                </div>
            </div>
        </main>
    </body>
</html>