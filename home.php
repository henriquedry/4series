<div class="container">

   <div class="row" >

<?php
include "conexao.php";

$sql = "SELECT * FROM series WHERE status = 'Ativo'";
$result = $conn->query($sql);

if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   

    echo'

    
  <div class="col lg-4 -md-4 sm-12">
    <div class="card-droup" style="padding-top: 60px; ">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$row['foto'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['nome'].'</h5>
    <p class="card-text">Gênero:   '.$row['genero'].'</p>
    <p class="text-center">
      <a href="update.php?id='.$row['id'].'" class="btn btn-default">Editar</a>
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <a href="exclui.php?id='.$row['id'].'" onclick="return confirm(\'Tem certeza???\')" class="btn btn-default">Apagar</a>
    </p>
    
  </div>
</div>



</div>
</div>
';





}

} else{
  echo "0 resultados";
}
$conn->close();






?>

</div>
</div>