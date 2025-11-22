<?php
	//back-end dos botões e inserção das informações no banco de dados
	switch($_REQUEST['acao']) {
		case 'cadastrar':	
			$nome = $_POST['nome_autor'];

		$sql = "INSERT INTO autor(nome_autor)
				VALUES ('{$nome}')";

		$res = $conn->query($sql);
		if($res == true) {
			//cadastrado com sucesso
			print "<script>alert('Cadastrou com sucesso!');</script>";
			print "<script>location.href='?page=listar-autor';</script>";
		}else{
			//cadastro não teve êxito
			print "<script>alert('Não cadastrou');</script>";
			print "<script>location.href='?page=listar-autor';</script>";
		}
		break;

	//back end do botão editar
	case 'editar':
		$nome = $_POST['nome_autor'];

		$sql = "UPDATE autor SET nome_autor='{$nome}' WHERE id_autor=".$_REQUEST['id_autor'];

		$res = $conn->query($sql);

		if($res == true){
			//edição da informação bem sucedida
			print "<script>alert('Editou com sucesso!');</script>";
			print "<script>location.href='?page=listar-autor';</script>";
		}else{
			//não foi possível editar
			print "<script>alert('Não editar');</script>";
			print "<script>location.href='?page=listar-autor';</script>";
		}
		break;

	//back-end do botão excluir
	case 'excluir':
		$sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST['id_autor'];

		$res = $conn->query($sql);

		if($res == true){
			//se exclusão for feita
			print "<script>alert('Excluiu com sucesso!');</script>";
			print "<script>location.href='?page=listar-autor';</script>";
		}else{
			//se exclusão não for feita
			print "<script>alert('Não excluiu');</script>";
			print "<scipt>location.href='?page=listar-autor';</script>";
		}

		break;
	}
?>