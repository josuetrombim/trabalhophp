<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>JJ Lanches - Cadastro</title>
	<meta charset="UTF-8"/>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
		}
		.container-cad{
			height: 100vh;
			width: 100vw;
			background-image: url("img/grelha.jpg");
			background-repeat: round;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.form-cad{
			border-radius: 10px;
			background-color: rgb(0,0,0,0.7);
			color: #cfcfcf;
			padding: 5px 10px;
			margin-left: 0px;
		}
		.form-cad > button, select{
			width: 20%;
			height: 25px;
			border-radius: 8%;
			border: 1px solid black;
			background-color: lightgrey;	
		}
		.form-cad > label, select, button{
			width: 15%;
			height: 25%;
			margin: 2px;
			
		}
		.form-cad > input{
			margin: 2px;
		}
	</style>
</head>
<body>
	<div class="container-cad">
	<form class="form-cad" action="index.php" method="post">
		<header>
			<h2>Cadatro de Usuário</h2>
		</header>
		<input type="name" name="nome" id="nome" class="form-control" placeholder="Insira o seu nome">
		
		<input type="email" name="email" id="email" class="form-control" placeholder="Insira o seu email">
		<br>
		<input type="CPF" name="cpf" id="cpf" class="form-control" placeholder="Insira o seu CPF">
		<input type="psw" name="password" id="passw" class="form-control" placeholder="Insira a sua senha">
		<br>
		<select id="sexo">
			<option value="" selected>Sexo</option>
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select>
		<br>
		<button type="submit" action="#">Enviar</button>
		
		</form>
		
	</div>
	
</body>
</html>
</html>