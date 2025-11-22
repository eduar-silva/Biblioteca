<!-- Página de Cadastro -->
<h1>Cadastrar Autores</h1>
<!-- Inserção de informação referente ao nome do autor e botão cadastro -->
<form action="?page=salvar-autor" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do autor
				<input type="text" name="nome_autor" class="form-control">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>