<?php 
    session_start();
    
    include_once '../classes/conexao.php';

    $idUsuario = $_SESSION['idUsuario'];



    $nome_arquivo = "";

    if( isset( $_FILES['foto']['name'] ) && $_FILES['foto']['name'] != "" ){
        $nome_arquivo = date("YmdHis") . basename( $_FILES['foto']['name'] ); 
        $diretorio = "../img/usuarios/";
        $caminho = $diretorio.$nome_arquivo;
        UploadImg($nome_arquivo, $idUsuario);

        if(  ! move_uploaded_file( $_FILES['foto']['tmp_name']  , $caminho )  ){
            $nome_arquivo = "sem_foto_profile.jpg";
            UploadImg($nome_arquivo, $idUsuario);
        }

    }else{
        $nome_arquivo = "sem_foto_profile.jpg";
        UploadImg($nome_arquivo, $idUsuario);
    }
    
    header("Location: ../perfil.php");
    
    function UploadImg($nome_arquivo, $idUsuario){
        $query = 'UPDATE usuarios SET foto = "'.$nome_arquivo.'" WHERE usuarios.id ='.$idUsuario;
        Conexao::executar($query);
    }


?>