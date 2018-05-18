<?php

include 'conexao.php';

$id = $_POST['id'];
$status = $_POST['status'];




$sql = "UPDATE series SET  id='$id ,status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {

?>       

<section>
    <div class="container">
        <p class="h3">Produto Atualizado com sucesso</p>
        <a href="perfilfunc.php" class="btn btn-secondary">Volta ao Perfil</a>
        <a href="atualizaprod.php" class="btn btn-secondary">Atulizar mais Produtos</a>

    </div>

</section>
                                                     


<?php
}
else{
    echo "Erro:". $conn->error;
}
 $conn->close();
?>


