<!-- <?php

?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>JJ Lanches - Login</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
		}
		.container {
			height: 100vh;
			width: 100vw;
			background-image: url("grelha.jpg");
			background-repeat: round;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.form-login {
			border-radius: 10px;
			background-color: rgb(0,0,0,0.7);
			text-align: center;
			color: #cfcfcf;
			padding: 5px 10px;
		}

		.margin-5: {
			margin: 5px;
		}

		.form-login > label, input, button {
			margin: 5px;
		}

		.form-login > input {
			height: 20px;
		}

		.form-login > button {
			background-color: blue;
		}

		.form-login > a {
			text-decoration: none;
			color: #cfcfcf;
			font-size: 1rem;
		}

		.form-login > button {
			width: 50%;
			height: 25px;
			border-radius: 10%;
			border: 1px solid black;
			background-color: lightgrey;
		}

	</style>

</head>
<body>

	<div class="container">
		<form class='form-login' method="POST" action="menu.php">
			<h2>Faça seu login</h2>
			<!-- <label>Login</label> -->
			<input type="email" name="email" placeholder="Login">
			<br>
			<!-- <label>Senha</label> -->
			<input type="password" name="password" placeholder="Senha">
			<br>
			<button type="submit">Entrar</button>
			<br>
			<a style="margin-top: 10px;" href="#">Esqueceu sua senha?</a>
			<br>
			<a href="#">Faca o seu cadastro.</a>
		</form>
	</div>
 </body>
</html>
</html>
