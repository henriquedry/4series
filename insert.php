<?php
	include "conexao.php";

	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$foto = $_POST['foto'];


	$sql = "INSERT INTO series (nome, genero, foto) VALUES ('$nome', '$genero', '$foto')";

	if ($conn->query($sql) === TRUE){
	echo "Série inserida com sucesso";
	header('location: index.php');
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>