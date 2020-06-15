<?php
    session_start();
        
    if( isset($_REQUEST['erroNoLogin']) ){
        echo " <script> alert('Usuário ou senha inválidos'); </script> ";
    }
    
    if(isset($_REQUEST['cadastroBemSucedido'])){
        echo '<script>alert("Cadstro bem Sucedido"); </script>';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="POG.css" >
    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>
        
        <h1>Login</h1>
        
        <div id="div_login">
            <form method="POST" action="logar.php">
                <label>Nome do Usuário:</label><br>
                <input type="text" name="user"><br>
                <label>Senha:</label><br>
                <input type="password" name="senha"><br>   
                
                <input type="submit" value="logar">
            </form>
        </div>
        
        
    </body>
</html>
