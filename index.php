<!DOCTYPE html>
<html>

	<?php
	function show($a){
	?>
	<a href="https://www.<?php echo $a ?>.com.br" target="_blank"><?php echo $a ?></a>
	<?php
	}
	?>

	<head>
		<meta charset="UTF-8">
		<title>Primeiro Projeto em PHP</title>
	</head>
	<body>
	
		<h1>Primeiro Projeto em PHP</h1>
		
		<h2>Turma: DEV Noite</h2>
	
	<?php
		$valor = 13;
		$divisor = 2;
		$resultado = $valor % $divisor; // % Faz o Mod ou Modal
		if ($resultado == 0){
			echo 'Valor ' . $valor . ' é Par!';
		} else {
			echo 'Valor ' . $valor . ' é Ímpar!';
		}
		echo '<br>';
		echo '<br>';
		show('Google');
		echo ' | ';
		show('Terra');
		echo ' | ';
		show('Youtube');
	?>
	
	<h3>Form. Get</h3>
	<form method="GET">
		<label for"nome">Nome: </label>
		<input type="text" name="nome" />
		<br>
		<label for"idade">Idade: </label>
		<input type="number" name="idade" />
		<br>
		<input type="submit" value="Calcular" name="calc"/>
		<br>
		<input type="reset" value="Limpar" name="limpar"/>
	</form>
	<br>
	<br>
	<h3>Form. Post</h3>
	<form method="POST">
		<input type="text" name="nome" placeholder="Digite o nome." />
		<br>
		<input type="number" name="idade" placeholder="Selecione a idade." />
		<br>
		<input type="submit" value="Calcular" name="calc"/>
		<br>
		<input type="reset" value="Limpar" name="limpar"/>
	</form>
	</body>
	<?php
	if(isset($_GET['calc'])){
		$dias = $_GET['idade'] * 365;
		echo $_GET['nome'] . ' tem ' . $_GET['idade'] . ' anos e já viveu ' . $dias . ' dias aproximadamente!';
	}
	if(isset($_POST['calc'])){
		$dias = $_POST['idade'] * 365;
		echo $_POST['nome'] . ' tem ' . $_POST['idade'] . ' anos e já viveu ' . $dias . ' dias aproximadamente!';
	}
	?>
</html>