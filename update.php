<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$genero= $_POST['genero'];
$foto = $_POST['foto'];
$temporada = $_POST['temporada'];
$descricao = $_POST['descricao'];



$sql = "UPDATE series SET  id='$id ,'nome='$nome' genero='$genero', foto='$foto', temporada='$temporada', descricao=$descricao  WHERE id=$id";

if ($conn->query($sql) === TRUE) {

echo "atualizado com sucesso";
}


<?php
}
else{
    echo "Erro:". $conn->error;
}
 $conn->close();
?>


