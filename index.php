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
			margin: 0; /*tira a margem total*/ 
			padding: 0; /*tira a o preenchimento*/
			font-family: 'Open Sans', sans-serif; /*tipo de fonte*/
		}
		.container {
			height: 100vh; /*define altura da div*/
			width: 100vw; /*define largura da div*/
			background-image: url("img/grelha.jpg"); /*fundo da tela*/
			background-repeat: round; /*evita que a imagem seja repetida para preencher a tela*/
			display: flex; /*divide a largura das divs "filhas" para que nao ocupem todo o espaço*/
			justify-content: center; /*alinhas os filhos no eixo Y*/
			align-items: center;/*alinha os filhos no eixo X*/
		}
		.form-login {
			border-radius: 10px; /*deixa a borda arredondada*/
			background-color: rgb(0,0,0,0.7); /*define a transparencia do background*/
			text-align: center; /*alinha o texto que esta dentro da div ao centro*/
			color: #cfcfcf; /*cor do texto*/
			padding: 5px 10px; /*define o preenchimento ao redor do form*/
		}
		.form-login > label, input, button {
			margin: 5px; /*espacamento externo*/
		}
		.form-login > input {
			height: 20px; /*altura dos campos de entrada*/
		}
		.form-login > a {
			text-decoration: none; /*tira o underline padrao do texto*/
			color: #cfcfcf;/*cor do texto*/
			font-size: 13px;/*tamanho da fonte dos links*/
		}
		.form-login > button {
			width: 50%; /*largura do botao*/
			height: 25px; /*altura do botao*/
			border-radius: 10%; /*arredonda as bordas*/
			border: 1px solid black; /*cria uma borda com espessura de 1px preto*/
			background-color: lightgrey;/*cor do fundo do botao*/
		}
		.form-login > a:hover {
			text-decoration: underline; /*coloca underline no texto quando o mouse passa por cima*/
			color: #ffffff;/*cor do texto*/
		}
	</style>
</head>
<body>
	<div class="container"> <!-- div usada para o background -->
		<form class='form-login' method="POST" action="menu.php"> <!-- Formulario -->
			<h2>Faça seu login</h2> <!-- titulo do form -->
			<input type="email" name="email" placeholder="Login"> <!-- Campo de texto / placeholder serve para colocar o texto informativo-->
			<br>
			<input type="password" name="password" placeholder="Senha">  <!-- Campo de texto -->
			<br>
			<button type="submit">Entrar</button> <!-- Botao-->
			<br>
			<a style="margin-top: 10px;" href="#">Esqueceu sua senha?</a> <!-- links para redirecionar a outras paginas-->
			<br>
			<a href="cadastro.php">Faca o seu cadastro.</a>
		</form>
	</div>
 </body>
</html>
</html>
