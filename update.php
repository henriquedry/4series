<div class="container">
<?php
include 'header.php';
include 'conexao.php';

$up = isset($_GET['up']) ? $_GET['up'] : false;

if($up) {
	$sql = "UPDATE `series` SET `nome` = '{$_POST['serieNome']}', `genero` = '{$_POST['serieGenero']}', `foto` = '{$_POST['serieFoto']}', `temporada` = '{$_POST['serieTemporada']}', `descricao` = '{$_POST['serieDescricao']}' WHERE `series`.`id` = 4;";
	$res = $conn->query($sql);
	echo '<h1 class="text-center">Atualizado!</h1>';
}
	$sql = "SELECT * FROM series WHERE id=".intval($_GET['id']);
	$res = $conn->query($sql);
	$row = $res->fetch_assoc();

?>
<h1 class="display-4" style="text-align:center; padding-top: 50px ">Alterar Série</h1>
<hr/>
<form method="POST" action="update.php?id=<?php echo $row['id']?>&up=sim" style="padding-top: 40px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="serieId">ID</label>
      <input type="text" class="form-control" id="serieId" placeholder="ID" name="serieId" value="<?php echo $row['id'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="serieNome">Nome</label>
      <input type="text" class="form-control" id="serieNome" placeholder="Nome" name="serieNome" value="<?php echo $row['nome'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="serieGenero">Gênero</label>
      <input type="text" class="form-control" id="serieGenero" placeholder="Gênero" name="serieGenero" value="<?php echo $row['genero'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="serieFoto">Foto</label>
    <input type="text" class="form-control" id="serieFoto" placeholder="Foto" name="serieFoto" value="<?php echo $row['foto'] ?>">
  </div>
   <div class="form-group">
    <label for="serieTemporada">Temporada</label>
    <input type="text" class="form-control" id="serieTemporada" placeholder="Temporada" name="serieTemporada" value="<?php echo $row['temporada'] ?>">
  </div>
   <div class="form-group">
    <label for="serieDescricao">Descrição</label>
    <input type="text" class="form-control" id="serieDescricao" placeholder="Descrição" name="serieDescricao" value="<?php echo $row['descricao'] ?>">
  </div>


<center>
  <button type="submit" class="btn btn-primary">Alterar</button></center>
</form>
</div>