<?php
include_once 'classes/conexao.php';

$nome = $_POST['nome'];
$user = $_POST['email'];
$senha = $_POST['senhaOrigin'];
$dataNasc = $_POST['dataNasc'];

if( isset( $_REQUEST['inserir']) ){
 $query = "INSERT INTO usuarios (nome, email, senha, nascimento) VALUES ('$nome', '$user', '$senha', '$dataNasc')";
 Conexao::executar($query);
 header("Location: login.php?cadastroBemSucedido");
}

?>