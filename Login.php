<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="/css/css_login.css">
    </head>
    <body>
        <div>
            <?php
            $id = $_GET['p'];
            echo"
                <form method='POST' action='validaLogin.php?p=".$id."'  id='form' name='form'>
                    <label for='login'> Login: <input type='text' id='login' name='login'></label>
                    
                    
                    <label class='login_senha' for='senha'> Senha: <input type='password' id='senha' name='senha'></label>
                    <button type='submit'>Login</button>
                    
                </form>"
            ?>
        </div>
    </body>
</html>