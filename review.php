<?php
    session_start();

    $idFilme = $_GET['idFilme'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>review</title>
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
            <form method="POST" id="review" action="salvarReview.php?idFilme=<?php echo $idFilme ?>" enctype="multipart/form-data">
                <label>Nota</label>
                <select name="optNota">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select><br>
                <label>Review</label><br>
                <textarea name="txtReview" rows="10" cols="110"></textarea>
                <br>
                <input type="submit" value="salvar">
            </form>
        </div>
        
    </body>
</html>
