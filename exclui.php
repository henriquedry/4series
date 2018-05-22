
   <!doctype html>
<div style="background-color:#fff">
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">

<body>



</div>

<div class="container">
<?php
include 'header.php';
include 'conexao.php';

$up = isset($_GET['up']) ? $_GET['up'] : false;

if($up) {
  $sql = "UPDATE `series` SET `status` = '{$_POST['serieStatus']}' WHERE `series`.`id` = 4;";
  $res = $conn->query($sql);
  echo '<h1 class="text-center">Atualizado!</h1>';
}
  $sql = "SELECT * FROM series WHERE id=".intval($_GET['id']);
  $res = $conn->query($sql);
  $row = $res->fetch_assoc();

?>


<h1 class="display-4" style="text-align:center; padding-top: 50px ">Excluir Série</h1>
<hr/>
<form method="POST" action="update.php?id=<?php echo $row['id']?>&up=sim" style="padding-top: 40px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="serieId">ID</label>
      <input type="text" class="form-control" id="serieId" placeholder="ID" name="serieId" value="<?php echo $row['id'] ?>">
    </div>
       <div class="form-group col-md-6">
    <label for="serieStatus">Status</label>
    <select class="form-control" id="serieStatus" name="serieStatus" value="<?php echo $row['status'] ?>">
      <option>Ativo</option>
      <option>Removido</option>
      
    </select>
  </div>
</div>

</form>
</div>


    
  

<center>
<button type="submit" class="btn btn-primary">Excluir</button></center>
