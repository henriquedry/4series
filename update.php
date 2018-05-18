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


