<?php
    include_once 'classes/clsFilme.php';
    include_once 'dao/clsFilmeDAO.php';
    include_once 'classes/conexao.php';
    
    $count=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmes</title>
        <link rel="stylesheet" type="text/css" href="POG.css" >
    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>

        <h1>Catálogo</h1>
        
        <div id="espacamento">
        <?php
        $lista = FilmeDAO::getFilmes();
        
        foreach ($lista as $filme){
            $count++;
            
            echo '<div id="filmList">';
            echo '  <a href="visualFilme.php?idFilme='.$filme->id.'">';
            echo '  <image src="img/'.$filme->foto.'" alt="erro ao mostrar imagem" width="350" height="450" ><br>';
            echo '  <label>'.$filme->nome.'</label><br>';
            echo '  </a>';
            echo '  <label>Gênero: '.$filme->genero.'</label><br>';
            echo '  <label>Nota: <strong>'.$filme->nota.'/10</strong></label>';
            echo '</div>';
            
            if($count === 4){
                echo'<br>';
                $count = 0;
            }
        }
        ?>
        </div>
    </body>
</html>

