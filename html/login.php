<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Entrar no sistema</title>
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
</head>
<body>
	<div class="container conteiner-loading">
		<div class="col-group">
			<div class="col-mb-0 col-dt-3 col-3"></div>
			<div class="col-mb-12 col-dt-6 col-6 box-home">				
				<div class="logo login">
					<img src="assets/img/logo-theme-light.png">
				</div>
				<div class="login-box">
					<form action="">
						<div class="campo">
							<i class="ic ic-user"></i>
							<input class="usuario" type="text" placeholder="Nome de usuário" name="username" required>
						</div>

						
						<div class="campo">
							<i class="ic ic-pass"></i>
							<input class="senha" type="password" placeholder="******" name="userpass" required>
							<i class="ic ic-view-pass"></i>
						</div>

						<button class="btn-entrar" id="entrar" type="submit">Entrar</button>					
					</form>
				</div>
			</div>
			<div class="col-mb-0 col-dt-3 col-3"></div>
		</div>
	</div>
</body>
</html>