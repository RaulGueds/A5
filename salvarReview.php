<?php
    session_start();
    
    include_once 'dao/clsReviewDAO.php';
    include_once 'classes/conexao.php';
    include_once 'classes/clsReview.php';
    
    
    $id_usuario = $_SESSION['idUsuario'];
    $id_filme = $_GET['idFilme'];
    $reviewText = $_POST["txtReview"];
    $optNota = $_POST['optNota'];
    
    
    
    $review = ReviewDAO::getCheckReview($id_filme, $id_usuario);

    if($review->cont > 0){
        $review = ReviewDAO::UpdateReview($id_filme, $id_usuario, $reviewText, $optNota);
        header('Location: visualFilme.php?idFilme='.$id_filme);
    }else{
        $review = ReviewDAO::AddReview($id_filme, $id_usuario, $reviewText, $optNota);
        header('Location: visualFilme.php?idFilme='.$id_filme);
    }
?>