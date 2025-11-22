<h1>Editar Empréstimo</h1>
<?php
	$sql = "SELECT * FROM emprestimo WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-emprestimo" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_modelo" value="<?php print $row->id_emprestimo; ?>">
	<div class="mb-3">
		<label>Atendente
				<select name="funcionario_id_funcionario" class="form-control" required>
					<option>Atendente presente</option>
					<?php
						$sql = "SELECT * FROM funcionario";
						$res = $conn->query($sql);
						$qtd = $res->num_rows;
						if($qtd > 0){
							while($row = $res->fetch_object()){
								print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
							}
						}else{
							print "<option>Não há atendentes cadastrados</option>";
						}
					?>
				</select>
		</label>
	</div>
	<div class="mb-3">
		<label>Prestamista 
				<select name="cliente_id_cliente" class="form-control" required>
					<option>Empréstimo feito para</option>
					<?php
						$sql = "SELECT * FROM cliente";
						$res = $conn->query($sql);
						$qtd = $res->num_rows;
						if($qtd > 0){
							while($row = $res->fetch_object()){
								print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
							}
						}else{
							print "<option>Não há clientes cadastrados</option>";
						}
					?>
				</select>
		</label>
	</div>
	<div class="mb-3">
		<label>Livro emprestado 
				<select name="livro_id_livro" class="form-control" required>
					<option>Escolha o livro</option>
					<?php
						$sql = "SELECT * FROM livro";
						$res = $conn->query($sql);
						$qtd = $res->num_rows;
						if($qtd > 0){
							while($row = $res->fetch_object()){
								print "<option value='{$row->id_livro}'>{$row->nome_livro}</option>";
							}
						}else{
							print "<option>Não há livros cadastrados</option>";
						}
					?>
				</select>
		</label>
	</div>
	<div class="mb-3">
		<label>Data do empréstimo
				<input type="date" name="data_emprestimo" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Data final para devolução
				<input type="date" name="data_final_emprestimo" class="form-control">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>