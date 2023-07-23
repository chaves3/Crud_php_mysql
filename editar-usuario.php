<h1>Editar Usuário</h1>
<<?php 

$sql = "SELECT * FROM lista WHERE id = ".$_REQUEST["id"];

$res = $conn->query($sql);

$row = $res->fetch_object();


 ?>
<form action="?page=salvar" method="POST">
   
   	<input type="hidden" name="acao" value="editar">

   	<input type="hidden" name="id" value="<?php print $row->id;  ?>">

<div class="mb-3">
		
    <label>Nome</label>
    <input type="text" name="nome" value=" <?php print $row->nome_item; ?>" class="form-control">

</div>

<div class="mb-3">
	<label>Descrição</label>
	<input type="text" name="descricao" value=" <?php print $row->descricao; ?>" class="form-control">

</div>

<div class="mb-3">
	<label>Quantidade</label>
	<input type="text" name="quantidade" value=" <?php print $row->quantidade; ?>" class="form-control">
</div>

<div class="mb-3">
	<button type="submit" class="btn btn-primary">Enviar</button>
</div>


</form>