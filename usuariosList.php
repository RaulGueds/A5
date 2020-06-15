<?php
    include_once 'dao/clsUsuarioDAO.php';
    include_once 'classes/clsUsuario.php';
    include_once 'classes/conexao.php';
    
    $count=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="POG.css" >
    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>
        
        <h1>Lista de Usuarios</h1>
        
        <div id="espacamento" class="pp">
        <?php
        $lista = usuarioDAO::getUsuarios();
        
        foreach ($lista as $usuario){
            $count++;
            
            echo '<div id="usuarioList">';
            echo '  <a href="visualUsuario.php?idUsuario='.$usuario->id.'">';
            echo '  <img src="img/usuarios/'.$usuario->foto.'" alt="erro ao mostrar imagem" width="180" height="250" ><br>';
            echo '  <label>'.$usuario->nome.'</label><br>';
            echo '  </a>';
            echo '  <label>Idade: '.$usuario->idade->format("%Y").'</label>';
            echo '</div>';
            
            if($count === 7){
                echo'<br>';
                $count = 0;
            }
        }
        ?>
        </div>
    </body>
</html>
