<h1>Listar Livros</h1>
<?php
	$sql = "SELECT * FROM livro
			INNER JOIN autor
			ON livro.autor_id_autor = autor.id_autor";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Autor</th>";
		print "<th>Nome do Livro</th>";
		print "<th>Gênero</th>";
		print "<th>Ano de Lançamento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row->nome_autor."</td>";
			print "<td>".$row->nome_livro."</td>";
			print "<td>".$row->genero_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-livro&id_livro={$row->id_livro}';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-livro&acao=excluir&id_livro={$row->id_livro}';}else{false;}\">
						Excluir</button>
					</td>";
			 print "</tr>"; 
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}
?>