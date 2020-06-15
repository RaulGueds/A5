<?php

class usuarioDAO{
    
    public static function getUsuarios() {
        $query = "SELECT id, nome, nascimento, foto FROM usuarios"
                . " ORDER BY nome";
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();
        
        while( list($id, $nome, $nascimento, $foto )
            = mysqli_fetch_row($result)){
                $usuario = new Usuario();
                $usuario->id = $id;
                $usuario->nome = $nome;
                $dataAtual = date('Y-m-d');
                $usuario->idade = date_diff(date_create($nascimento), date_create($dataAtual));
                $usuario->foto = $foto;
                $lista->append($usuario);
            }
            return $lista;
        
        
    }




    public static function getUsuarioById($userId){
        $query = "SELECT nome, email, nascimento, foto FROM usuarios"
                    . " WHERE id = ".$userId;
        $result = Conexao::consultar($query);
        
        list($nome, $email, $nascimento, $foto) = mysqli_fetch_row($result);
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->email = $email;
        $dataAtual = date('Y-m-d');
        $usuario->idade = date_diff(date_create($nascimento), date_create($dataAtual));
        $usuario->foto = $foto;
        
        return $usuario;
        }
}

?>

