<?php
    session_start();

    include_once 'dao/clsUsuarioDAO.php';
    include_once 'dao/clsReviewDAO.php';
    include_once 'classes/conexao.php';
    include_once 'classes/clsUsuario.php';
    include_once 'classes/clsReview.php';
    
    $idUsuario = $_SESSION['idUsuario'];
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="stylesheet" type="text/css" href="POG.css" >
    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>
        <br>
        <br>
        <br>
        <div id="espacamento">
            <?php
            $usuario = usuarioDAO::getUsuarioById($_SESSION['idUsuario']);
            echo '<div id="usuarioImg">';
            echo '<img src="img/usuarios/'.$usuario->foto.'" alt="erro ao mostrar imagem" width="350" height="450"><br>';
            ?>
            
            <form method="POST" action="controller/alterarImg.php" enctype="multipart/form-data">
            <label>Alterar Foto:</label>
            <input type="file" name="foto">
            <input type="submit" value="Salvar">
            <br>
            <br>
            </form>
            
            <?php
            echo '<label class="perfilLabel">Nome: '.$usuario->nome.'</label><br>';
            echo '<label>Idade: '.$usuario->idade->format("%Y").'</label><br>';
            echo '<label>Email da Conta: '.$usuario->email.'</label><br>';

            echo '</div>';
            
            
            $lista = ReviewDAO::getReviewsByUsuario($idUsuario);
            
            if(count($lista) == 0){
                echo "<h3>Este Usuario ainda não fez nenhuma review</h3>";
            }else{
                ?>
            
        
        </div>
        
        <table>
            <tr>
                <th>Filme</th>
                <th>Foto</th>
                <th>Review</th>
                <th>Nota</th>
                <th>Alterar</th>
            </tr>   
            
            
            <?php
                foreach ($lista as $revs){
                    echo '<tr>';
                    echo '  <td><a href="visualFilme.php?idFilme='.$revs->id_filme.'">'.$revs->nomeFilme.'</a></td>';
                    echo '  <td><img src="img/'.$revs->fotoFilme.'" alt="erro ao mostrar imagem" width="50" height="50" ></td>';
                    echo '  <td>'.$revs->review.'</td>';
                    echo '  <td>'.$revs->nota.'</td>';
                    echo '  <td><a href="review.php?idFilme='.$revs->id_filme.'"><button>Alterar</button></a></td>';
                    echo '</tr>';
                }
            
            
            }
            ?>
        </table>
    </body>
</html>
