<?php 
session_start();

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link do estilo css-->
	<link rel="stylesheet" href="inicio.css">
	<link rel="shortcut icon" href="favicon_32x32.png" type="image/x-icon">
	<title>Menu</title>
</head>
<body>
	<div class="container">
		<nav class="menu">
			<ul>
				<li>
					<a href="Menu/Perfil/perfil.php">
						<i class="fa fa-user"></i>
						<span class="span-menu">Meu Perfil</span>
					</a>
				</li>
				<li>
					<a href="Menu/Nova Consulta/novaconsulta.php">
						<i class="fa fa-calendar-plus-o"></i>
						<span class="span-menu">Nova Consulta</span>
					</a>
				</li>
				<li>
					<a href="Menu/Consultas Marcadas/consultasmarcadas.php">
						<i class="fa fa-calendar-check-o"></i>
						<span class="span-menu">Consultas Marcadas</span>
					</a>
				</li>
				<li>
					<a href="Menu/Plano de tratamento/planodetratamento.php">
						<i class="fa fa-pencil-square-o"></i>
						<span class="span-menu">Plano de Tratamento</span>
					</a>
				</li>
				<li>
				<a href="Menu/Sessões realizadas/sessoesrealizadas.php">
					<i class="fa fa-clock-o"></i>
					<span class="span-menu">Sessões Realizadas</span>
				</a>
				</li>
				<li>
					<a href="Menu/Chat/chat.php">
						<i class="fa fa-comments-o"></i>
						<span class="span-menu">Chat</span>
					</a>
				</li>
				<li>
					<a href="Menu/Treinos/treinos.php">
						<i class="fa fa-male"></i>
						<span class="span-menu">Treinos</span>
					</a>
				</li>
				<li>
					<a href="Menu/Taxa de evolução/taxadeevolucao.php">
						<i class="fa fa-line-chart"></i>
						<span class="span-menu">Taxa de Evolução</span>
					</a>
				</li>
				<li>
					<a href="Menu/Configurações/configuracoes.php">
						<i class="fa fa-cog"></i>
						<span class="span-menu">Configurações</span>
					</a>
				</li>
			</ul>
		</nav>
		<div class="home"></div>
	</div>
</body>
</html>