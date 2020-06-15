<?php

class ReviewDAO{
    
    public static function getCheckReview($id_filme, $id_usuario){
        $query='SELECT COUNT(id) FROM reviews WHERE id_filme = '.$id_filme.' AND id_usuario = '.$id_usuario;
        $result = Conexao::consultar($query);
        
        list($cont) = mysqli_fetch_row($result);
        $review = new Review();
        $review->cont = $cont;
        
        return $review;
}

    public static function UpdateReview($id_filme, $id_usuario, $reviewText, $optNota) {
        $query = 'UPDATE reviews SET review = "'.$reviewText.'", nota = '.$optNota.' WHERE reviews.id_filme = '.$id_filme.' AND reviews.id_usuario = '.$id_usuario;
        Conexao::executar($query);
}

    public static function AddReview($id_filme, $id_usuario, $reviewText, $optNota) {
        $query = 'INSERT INTO reviews (id_filme, id_usuario, review, nota) VALUES ('.$id_filme.', '.$id_usuario.', "'.$reviewText.'", '.$optNota.')';
        Conexao::executar($query);
    
}

    public static function getReviewsByFilme($id_filme) {
        $query = 'SELECT  usuarios.id, usuarios.nome, usuarios.foto, reviews.review, reviews.nota FROM reviews INNER JOIN usuarios ON reviews.id_usuario = usuarios.id'
                . ' WHERE reviews.id_filme = '.$id_filme;
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();
        
        while( list($idUsuario, $nomeUsuario, $fotoUsuario, $reviewText, $optNota) = mysqli_fetch_row($result)){
            $rev = new Review();
            $rev->nomeUsuario = $nomeUsuario;
            $rev->fotoUsuario = $fotoUsuario;
            $rev->review = $reviewText;
            $rev->nota = $optNota;
            $rev->id_usuario = $idUsuario;
            $lista->append($rev);
        }
        return $lista;
        
    }
    
    
    public static function getReviewsByUsuario($id_usuario) {
        $query = 'SELECT  filmes.id, filmes.nome, filmes.foto, reviews.review, reviews.nota FROM reviews INNER JOIN filmes ON reviews.id_filme = filmes.id'
                . ' WHERE reviews.id_usuario = '.$id_usuario;
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();
        
        while( list($idFilme, $nomeFilme, $fotoFilme, $reviewText, $optNota) = mysqli_fetch_row($result)){
            $rev = new Review();
            $rev->nomeFilme = $nomeFilme;
            $rev->fotoFilme = $fotoFilme;
            $rev->review = $reviewText;
            $rev->nota = $optNota;
            $rev->id_filme = $idFilme;
            $lista->append($rev);
        }
        return $lista;
        
    }

}
?>
