<?php
	include_once("conexao.php");
	$nome  =        $_POST['nome'];
	$telefone  =    $_POST['telefone'];
	$email =		$_POST['email'];

	$sql = "INSERT INTO entrecontato (Nome,Telefone,Email) VALUES ('$nome','$telefone','$email')";

	$resultado = mysqli_query($conn, $sql);
?>
