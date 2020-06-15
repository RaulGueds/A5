<?php

    class FilmeDAO{
        
        public static function getFilmes() {
            $query = "SELECT id, nome, genero, diretor, nota, foto FROM filmes"
                    . " ORDER BY nome";
            $result = Conexao::consultar($query);
            $lista = new ArrayObject();
            
            while( list($id, $nome, $genero, $diretor, $nota, $foto )
            = mysqli_fetch_row($result)){
                $filme = new Filme();
                $filme->id = $id;
                $filme->nome = $nome;
                $filme->genero = $genero;
                $filme->diretor = $diretor;
                $filme->nota = $nota;
                $filme->foto = $foto;
                $lista->append($filme);
            }
            return $lista;
        }
        
        public static function getFilmeById($idFilme) {
            $query = "SELECT nome, genero, diretor, sinopse, nota, foto FROM filmes"
                    . " WHERE id = ".$idFilme;
            $result= Conexao::consultar($query);
            
            list($nome, $genero, $diretor, $sinopse, $nota, $foto) = mysqli_fetch_row($result);
            $filme = new Filme();
            $filme->nome = $nome;
            $filme->genero = $genero;
            $filme->diretor = $diretor;
            $filme->sinopse = $sinopse;
            $filme->nota = $nota;
            $filme->foto = $foto;
            
            return $filme;
            
        }
    }
?>