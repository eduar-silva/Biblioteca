<?php
	switch($_REQUEST['acao']) {
		case 'cadastrar':	
			$nome = $_POST['nome_livro'];
			$genero = $_POST['genero_livro'];
			$ano = $_POST['ano_livro'];
			$autor = $_POST['autor_id_autor'];

		$sql = "INSERT INTO livro(nome_livro, genero_livro, ano_livro, autor_id_autor)
				VALUES ('{$nome}', '{$genero}', '{$ano}', '{$autor}')";

		$res = $conn->query($sql);
		if($res == true) {
			print "<script>alert('Cadastrou com sucesso!');</script>";
			print "<script>location.href='?page=listar-livro';</script>";
		}else{
			print "<script>alert('Não cadastrou');</script>";
			print "<script>location.href='?page=listar-livro';</script>";
		}
		break;

	case 'editar':
		$nome = $_POST['nome_livro'];
		$genero = $_POST['genero_livro'];
		$ano = $_POST['ano_livro'];
		$autor = $_POST['autor_id_autor'];

		$sql = "UPDATE livro SET nome_livro='{$nome}', genero_livro='{$genero}', ano_livro='{$ano}', autor_id_autor={$autor} WHERE id_livro=".$_REQUEST['id_livro'];

		$res = $conn->query($sql);

		if($res == true){
			print "<script>alert('Editou com sucesso!');</script>";
			print "<script>location.href='?page=listar-livro';</script>";
		}else{
			print "<script>alert('Não editar');</script>";
			print "<script>location.href='?page=listar-livro';</script>";
		}
		break;

	case 'excluir':
		$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST['id_livro'];

		$res = $conn->query($sql);


		if($res == true){
			print "<script>alert('Excluiu com sucesso!');</script>";
			print "<script>location.href='?page=listar-livro';</script>";
		}else{
			print "<script>alert('Não excluiu');</script>";
			print "<scipt>location.href='?page=listar-livro';</script>";
		}

		break;
	}
?>