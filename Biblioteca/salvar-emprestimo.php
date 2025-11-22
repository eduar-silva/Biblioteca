<?php
	switch($_REQUEST['acao']) {
		case 'cadastrar':	
			$data_emprestimo = $_POST['data_emprestimo'];
			$data_final_emprestimo = $_POST['data_final_emprestimo'];
			$prestamista = $_POST['cliente_id_cliente'];
			$atendente = $_POST['funcionario_id_funcionario'];
			$livro_emprestado = $_POST['livro_id_livro'];

		$sql = "INSERT INTO emprestimo(data_emprestimo, data_final_emprestimo, cliente_id_cliente, funcionario_id_funcionario, livro_id_livro)
				VALUES ('{$data_emprestimo}', '{$data_final_emprestimo}', '{$prestamista}', '{$atendente}', '{$livro_emprestado}')";

		$res = $conn->query($sql);
		if($res == true) {
			print "<script>alert('Cadastrou com sucesso!');</script>";
			print "<script>location.href='?page=listar-emprestimo';</script>";
		}else{
			print "<script>alert('Não cadastrou');</script>";
			print "<script>location.href='?page=listar-emprestimo';</script>";
		}
		break;

	case 'editar':
		$data_emprestimo = $_POST['data_emprestimo'];
		$data_final_emprestimo = $_POST['data_final_emprestimo'];
		$prestamista = $_POST['cliente_id_cliente'];
		$atendente = $_POST['funcionario_id_funcionario'];
		$livro_emprestado = $_POST['livro_id_livro'];


		$sql = "UPDATE emprestimo SET data_emprestimo='{$data_emprestimo}', data_final_emprestimo='{$data_final_emprestimo}', cliente_id_cliente='{$prestamista}', funcionario_id_funcionario='{$atendente}' livro_id_livro={$livro_emprestado} WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];

		$res = $conn->query($sql);

		if($res == true){
			print "<script>alert('Editou com sucesso!');</script>";
			print "<script>location.href='?page=listar-emprestimo';</script>";
		}else{
			print "<script>alert('Não editar');</script>";
			print "<script>location.href='?page=listar-emprestimo';</script>";
		}
		break;

	case 'excluir':
		$sql = "DELETE FROM emprestimo WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];

		$res = $conn->query($sql);

		if($res == true){
			print "<script>alert('Excluiu com sucesso!');</script>";
			print "<script>location.href='?page=listar-emprestimo';</script>";
		}else{
			print "<script>alert('Não excluiu');</script>";
			print "<scipt>location.href='?page=listar-emprestimo';</script>";
		}

		break;
	}
?>