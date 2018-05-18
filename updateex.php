<?php

include 'conexao.php';

$id = $_POST['id'];
$status = $_POST['status'];




$sql = "UPDATE series SET  id='$id ,status='$status' WHERE id=$id";

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


