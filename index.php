<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="logo">

		</div>
		<div class="acoes">
			<a href="">Minha conta</a>
			<a href="">Sair do sistema</a>
		</div>
		<div class="search">
			<label>Olá, ADM Rafael Augusto! Deseja pesquisar algo?</label>
			<input type="search" placeholder="O que esta procurando?">
		</div>
	</header>

	<nav class="menu">
		<ul>
			<li>Controle</li>
			<li>Ordem de Pedidos</li>
			<li>Fornecedores</li>
			<li>Gerenciar Produtos</li>
			<li>Categorias / Sub-Categorias</li>
			<li>Tipo telefone</li>
			<li class="subMenu">
				Relatorios
				<ul>
					<li>Relatorio de produtos</li>
					<li></li>
				</ul>
			</li>
		</ul>
	</nav>

	<section class="content">
		<div class="marcador">Controle</div>

		<div class="box">
			<header>Produtos com estoque minimo</header>
			<table class="tabela">
				<thead>
					<tr>
						<td>#</td>
						<td>Produto</td>
						<td>Preço venda</td>
						<td>Estoque</td>
						<td>Estoque Minimo</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>	
				</tbody>
			</table>


		</div>

		<div class="box">
			<header>Ordens de pedidos em aberto</header>
			<table class="tabela">
				<thead>
					<tr>
						<td>#</td>
						<td>Data inicial</td>
						<td>Data final</td>
						<td>Cliente</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>	
				</tbody>
			</table>

			
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="js/funcoes.js"></script>
</body>
</html>