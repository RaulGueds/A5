<?php
    include_once "classes/conexao.php";
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    
    $query = "SELECT id FROM usuarios WHERE email = '$user' AND senha = '$senha' ";
    $result = Conexao::consultar( $query );

    if(  mysqli_num_rows($result) > 0 ){
        session_start();

        $usuario = mysqli_fetch_assoc($result);
        
        $_SESSION["logado"] = TRUE;
        
        $_SESSION["idUsuario"] = $usuario['id'];
        
        header( "Location: index.php" );
    }else{
        header( "Location: login.php?erroNoLogin" );
    }
    
    ?>