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
                    <center><h1>Cadastre-se</h1></center>
                    <?php
                    echo"
                        <form method='POST' action='cadastroCliente.php?'  id='form' name='form'>
                                <div class='entries'>
                                    <ul class='lista '>
                                        <li>
                                            <label > Nome: </label>
                                            <input style='margin-left: 65px' name='nome' type='text' id='login' name='login' required></input>
                                        </li>
                                        <li>
                                            <label for='login'> Email: </label>
                                            <input style='margin-left: 65px' name='email' type='text' id='login' name='login' required></input>
                                        </li>
                                        <li>
                                            <label  for='senha'> Senha:</label>
                                            <input style='margin-left: 59px' name='senha' type='password' id='senha' name='senha' required></input>
                                        </li>
                                        <li>
                                            <label>Cpf: </label>
                                            <input style='margin-left: 81px' name='cpf' type='text' min='11' required></input>
                                        </li>
                                        <li>
                                            <label>Data Nascimento: </label>
                                            <input style='margin-left: 1px' name='data_nasc' type='date' min='11' required></input>
                                        </li>
                                        <li>
                                            <label>Telefone: </label>
                                            <input style='margin-left: 40px' name='telefone' type='text' min='11' required></input>
                                        </li>
                                        <li>
                                            <label>Cidade: </label>
                                            <input style='margin-left: 52px' name='cidade' type='text' required></input>
                                        </li>
                                        <li>
                                            <label>Bairro: </label>
                                            <input style='margin-left: 57px' name='bairro' type='text' required></input>
                                        </li>
                                        <li>
                                            <label>Rua: </label>
                                            <input style='margin-left: 73px' name='rua' type='text' required ></input>
                                        </li>
                                    <ul>
                                </div>
                            <center><button class='but_log' type='submit'>Login</button></center>
                            
                        </form>"
                ?>
                </div>
            </div>
        </main>
    </body>
</html>