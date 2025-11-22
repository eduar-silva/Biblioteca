<h1>Listar Empréstimos</h1>	
<?php
	$sql = "SELECT * FROM emprestimo
			INNER JOIN cliente 
			ON emprestimo.cliente_id_cliente = cliente.id_cliente

			INNER JOIN funcionario 
			ON emprestimo.funcionario_id_funcionario = funcionario.id_funcionario
			
			INNER JOIN livro 
			ON emprestimo.livro_id_livro = livro.id_livro";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Atendente</th>";
		print "<th>Prestamista</th>";
		print "<th>Livro Emprestado</th>";
		print "<th>Data da emprestimo</th>";
		print "<th>Data de Devolução</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_emprestimo."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->nome_cliente."</td>";
			print "<td>".$row->nome_livro."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_final_emprestimo."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-emprestimo&id_emprestimo={$row->id_emprestimo}';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-emprestimo&acao=excluir&id_emprestimo={$row->id_emprestimo}';}else{false;}\">
						Excluir</button>
					</td>";
			 print "</tr>"; 
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}
?>