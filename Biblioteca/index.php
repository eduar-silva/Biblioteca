<!DOCTYPE html>
<html>
<head>
	<!-- Altera título da página -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<!-- NavBar -->
		<nav class="navbar navbar-expand-lg bg-secondary" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Biblioteca</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Funcionários
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Clientes
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Autores
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-autor">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-autor">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Livros
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Empréstimos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-emprestimo">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-emprestimo">Listar</a></li>	            
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- Redirects para os arquivos .php -->
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
				include('config.php');
					switch(@$_REQUEST["page"]) {
						//cadastro-listar-editar-salvar-funcionario
						case 'cadastrar-funcionario':
							include('cadastrar-funcionario.php');
							break;
						
						case 'listar-funcionario':
							include('listar-funcionario.php');
							break;
						
						case 'editar-funcionario':
							include('editar-funcionario.php');
							break;

						case 'salvar-funcionario':
							include('salvar-funcionario.php');
							break;

						//cadastro-listar-editar-salvar-cliente
						case 'cadastrar-cliente':
							include('cadastrar-cliente.php');
							break;
						
						case 'listar-cliente':
							include('listar-cliente.php');
							break;
						
						case 'editar-cliente':
							include('editar-cliente.php');
							break;

						case 'salvar-cliente':
							include('salvar-cliente.php');
							break;

						//cadastro-listar-editar-salvar-autor
						case 'cadastrar-autor':
							include('cadastrar-autor.php');
							break;
						
						case 'listar-autor':
							include('listar-autor.php');
							break;
						
						case 'editar-autor':
							include('editar-autor.php');
							break;

						case 'salvar-autor':
							include('salvar-autor.php');
							break;

						//cadastro-listar-editar-salvar-livro
						case 'cadastrar-livro':
							include('cadastrar-livro.php');
							break;
						
						case 'listar-livro':
							include('listar-livro.php');
							break;
						
						case 'editar-livro':
							include('editar-livro.php');
							break;

						case 'salvar-livro':
							include('salvar-livro.php');
							break;

						//cadastro-listar-editar-salvar-emprestimo
						case 'cadastrar-emprestimo':
							include('cadastrar-emprestimo.php');
							break;
						
						case 'listar-emprestimo':
							include('listar-emprestimo.php');
							break;
						
						case 'editar-emprestimo':
							include('editar-emprestimo.php');
							break;

						case 'salvar-emprestimo':
							include('salvar-emprestimo.php');
							break;

						default:
							print "<div class='text-center'><h1>Seja bem-vindo ao sistema bibliotecário📕</h1></div>";
							break;
					}
				?>
			</div>						
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>