<!-- Página de edição da informação do nome do autor -->
<h1>Editar Autores</h1>
<?php
	$sql = "SELECT * FROM autor WHERE id_autor=".$_REQUEST['id_autor'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-autor" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_autor" value="<?php print $row->id_autor; ?>">
	<div class="mb-3">
		<label>Nome da autor
			<input type="text" name="nome_autor" class="form-control" value="<?php print $row->nome_autor; ?>">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>