<?php
	require 'config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Entrar no sistema</title>
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
</head>
<body>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<div class="container conteiner-loading">
		<div class="col-group">
			<div class="col-mb-0 col-dt-3 col-3"></div>
			<div class="col-mb-12 col-dt-6 col-6 box-home">				
				<div class="logo">
					<img src="assets/img/logo-theme-light.png"> 

				</div>			

				<div class="barra-progresso">
					<div class="config progress-bar loading">
						<span class="loading-bar"></span>
					</div>
					<div class="info-progress">
						<div class="info-left status">
							<span>Loading</span>
						</div>
						<div class="info-right porc">
							<span>0%</span>
						</div>
					</div>
				</div>
				<?php if(!$conn): ?>
					<div class="box-error red">
						<h2>Falha na conexão com o base de dados!</h2>
						<script>LoadingBarPorc("--", 'Erro!');</script>
						<p><?php  die(mysqli_connect_error()); ?></p>
						<a href="#suporte"><b>suporte</b>.</a>
					</div>						
				<?php else: ?>
					<script>LoadingBarPorc(100, 'Banco de dados carregado..');</script>
				<?php endif; ?>						
			</div>
			<div class="col-mb-0 col-dt-3 col-3"></div>
		</div>
	</div>
</body>
</html>