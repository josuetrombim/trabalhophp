<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>JJ Lanches - Cadastro</title>
	<meta charset="UTF-8"/>
	<h1>Cadastro de Usuário</h1>
</head>
<body>
	<form action="index.php" method="post"> 
	<label for="inputNamecad" class="sr-only">Nome:</label>
	<input type="name" name="nome" id="inputNamecad" class="form-control" placeholder="Insira o seu nome">
	<label for="inputEmailcad" class="sr-only">Email:</label>
	<input type="email" name="email" id="inputEmailcad" class="form-control" placeholder="Insira o seu email">
	<label >Insira o seu CPF:</label>
	<input type="CPF" name="cpf" id="inputCpfcad" class="form-control" placeholder="Insira o seu CPF">
	<label for="sexo" class="sr-only">Sexo:</label>
	<selec name='sexo'>
		<p>
		<option value="">Sexo</option>
		<option value="M">Masculino</option>
		<option value="F">Feminino</option>
		</p>
	</form>
	<button type="submit" style="" action="">Enviar</button>
</body>
</html>