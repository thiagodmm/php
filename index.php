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
	
	<table>
		<tr>
			<td>
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
			</td>
			<td>
			
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
	</td>
	
	<td>
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
	</td>
	</tr>
	</table>

    <br>
    <br>
	
	<?php require_once './controller/cPessoaF.php';
	require_once './controller/cPessoaJ.php';
	$cadPFs = new cPessoaF();
	$cadPJs = new cPessoaJ();

    $pf1 = new pessoaF();
    $pf1->setNome('Darth Vader');
    $pf1->setTelefone(51876542027);
    $pf1->setEmail('vader@gmail.com');
    $pf1->setEndereco('Death Star');
    $pf1->setCpf(76736499876);
    $pf1->setSexo('M');
    $cadPFs->addPessoaF($pf1);

    $pj2 = new pessoaJ();
    $pj2->setNome('João das Candongas');
    $pj2->setTelefone(51554423333);
    $pj2->setEmail('faleconoscoo@espetinhoze.com.br');
    $pj2->setEndereco('Rua Carazinho');
    $pj2->setCnpj(8787324422323);
    $pj2->setNomeFantasia('Xis do Zé');
    $cadPJs->addPessoaJ($pj2);

    // Colocando as infos em duas colunas de uma Tabela 
    echo '<table><tr><td>';
	$cadPFs->imprime();
    echo '</td><td>';
	$cadPJs->imprimePJ();
    echo '</td></tr></table>'
	?>

    <h3>Cadastro de Pessoa Física</h3>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome aqui...">
        <br><br>
        <input type="tel" name="tel" placeholder="Telefone aqui...">
        <br><br>
        <input type="email" name="email" placeholder="E-mail aqui...">
        <br><br>
        <input type="text" name="end" placeholder="Endereço aqui...">
        <br><br>
        <input type="number" name="cpf" placeholder="CPF aqui...">
        <br><br>
        <input type="text" name="sexo" placeholder="Sexo aqui...">
        <br><br>
        <input type="submit" name="salvarPF" value="SALVAR">
        <br><br>
        <input type="reset" name="limpar" value="LIMPAR">
    </form>
	
	</body>
	
	<?php
	if(isset($_GET['calc'])){
		$dias = $_GET['idade'] * 365;
		$msg = 'Get: '
		. $_GET['nome'] 
		. ' tem ' 
		. $_GET['idade'] 
		. ' anos e já viveu ' 
		. $dias 
		. ' dias aproximadamente!';
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	if(isset($_POST['calc'])){
		$msg = 'Post: ' 
		. $_POST['nome'] 
		. ' tem ' 
		. $_POST['idade'] 
		. ' anos de vida ' 
		. ' e já viveu ' 
		. $_POST['idade'] * 365 
		. ' dias aproximadamente ';
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

    if(isset($_POST['salvarPF'])){
        $formPF = new pessoaF();
        $formPF->setNome($_POST['nome']);
        $formPF->setTelefone($_POST['tel']);
        $formPF->setEmail($_POST['email']);
        $formPF->setEndereco($_POST['end']);
        $formPF->setCpf($_POST['cpf']);
        $formPF->setSexo($_POST['sexo']);
        $cadPFs->addPessoaF($formPF);
        $cadPFs->imprime();
    }

	?>
	
</html>