<h1>Editar Livro</h1>
<?php
	$sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id_livro'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-livro" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">
	<div class="mb-3">
		<label>Nome do livro
				<input type="text" name="nome_livro" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Gênero do Livro
				<input type="text" name="genero_livro" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Ano de lançamento
				<input type="number" name="ano_livro" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Autor do Livro
				<select name="autor_id_autor" class="form-control" required>
					<option>Escolha um autor</option>
					<?php
						$sql = "SELECT * FROM autor";
						$res = $conn->query($sql);
						$qtd = $res->num_rows;
						if($qtd > 0){
							while($row = $res->fetch_object()){
								print "<option value='{$row->id_autor}'>{$row->nome_autor}</option>";
							}
						}else{
							print "<option>Não foi encontrado nenhum autor cadastrado!</option>";
						}
					?>
				</select>
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>