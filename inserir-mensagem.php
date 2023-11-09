<?php
require_once "Classes/Mensagem.php";
$comentario= new Mensagem();
$comentario ->nome = $_POST['nome'];
$comentario->email = $_POST['email'];
$comentario ->mensagem = $_POST['mensagem'];
$comentario -> inserir();
?>
