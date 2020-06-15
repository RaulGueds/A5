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
        
        <h1>Cadastro</h1>
        
        <div>
            <form method="POST" action="cadastrar.php?<?php echo $action; ?>" onsubmit="return validar()" enctype="multipart/form-data">
                <label>Nome:</label>
                <input type="text" name="nome" required><br>
                <label>E-mail:</label>
                <input type="email" name="email" required><br>
                <label>Criar Senha:</label>
                <input type="password" name="senhaOrigin" id="senhaOrigin" required>
                <label>Confirmar Senha:</label>
                <input type="password" name="senhaConfirm" id="senhaConfirm" required><br>
                <label>Data de Nascimento</label>
                <input type="date" name="dataNasc" id="dataNasc" required><br>
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
        
        
        <script src="scripts.js"></script>
    </body>
</html>