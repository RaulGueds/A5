<?php
    session_start();

    include_once 'classes/clsFilme.php';
    include_once 'classes/conexao.php';
    include_once 'classes/clsReview.php';
    include_once 'dao/clsFilmeDAO.php';
    include_once 'dao/clsReviewDAO.php';
    
    $idFilme = $_GET['idFilme'];
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
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
            $filme = FilmeDAO::getFilmeById($idFilme);
            echo '<div id="fvimg">';
            echo '<img src="img/'.$filme->foto.'" alt="erro ao mostrar imagem" width="350" height="450">';
            echo '</div>';
            echo '<div id="fvinfo">';
            echo '<label>Nome: '.$filme->nome.'</label><br><br>';
            echo '<label>Diretor: '.$filme->diretor.'</label><br><br>';
            echo '<label>Genero: '.$filme->genero.'</label><br><br>';
            echo '<label>Nota: <strong>'.$filme->nota.'/10</strong></label><br><br>';
            echo '<label>Sinopse: <br>'.$filme->sinopse.'</label>';
            echo '</div>';
            
            if(isset($_SESSION["logado"]) && $_SESSION["logado"]){
                echo '<a href="review.php?idFilme='.$idFilme.'"><button>Deixar Review</button></a>';
            }
            ?>
            </div>
        
        
        
            <?php
            $lista = ReviewDAO::getReviewsByFilme($idFilme);
            
            if(count($lista) == 0){
                echo "<h3>Este Filme ainda não tem review</h3>";
            }else{
                ?>
            
        
        
        
        <table>
            <tr>
                <th>Escritor</th>
                <th>Foto</th>
                <th>Review</th>
                <th>Nota</th>
            </tr>   
            
            <?php
                foreach ($lista as $revs){
                    echo '<tr>';
                    echo '  <td><a href="visualUsuario.php?idUsuario='.$revs->id_usuario.'">'.$revs->nomeUsuario.'</a></td>';
                    echo '  <td><img src="img/usuarios/'.$revs->fotoUsuario.'" alt="erro ao mostrar imagem" width="50" height="50"></td>';
                    echo '  <td>'.$revs->review.'</td>';
                    echo '  <td>'.$revs->nota.'</td>';
                    echo '</tr>';
                }
            
            
            }
            ?>
        </table>
            
    </body>
</html>

