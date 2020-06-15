<?php   $action = "inserir"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="POG.css" >
    </head>
    <body>

        <?php
        require_once 'menu.php';
        
        ?>

        <div id="espacamento">        
        <h1>    Cadastro</h1>
        <div id="log">
            <form method="POST" action="cadastrar.php?<?php echo $action; ?>" onsubmit="return validar()" enctype="multipart/form-data">
                <label>Nome:</label><br>
                <input type="text" name="nome" required><br><br>
                <label>E-mail:</label><br>
                <input type="email" name="email" required><br><br>
                <label>Criar Senha:</label><br>
                <input type="password" name="senhaOrigin" id="senhaOrigin" required><br><br>
                <label>Confirmar Senha:</label><br>
                <input type="password" name="senhaConfirm" id="senhaConfirm" required><br><br>
                <label>Data de Nascimento</label><br>
                <input type="date" name="dataNasc" id="dataNasc" required><br><br>
                
                <input type="submit" class="button" value="Cadastrar">
            </form>
            </div>
        </div>
        
        
        <script src="scripts.js"></script>
    </body>
</html>