<!DOCTYPE html>

<?php 
require_once '../controller/cPessoaF.php';
$cadPFs = new cPessoaF();
?>

<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<table>
    <tr>
        <td>
            <h1>Cadastrar Pessoa Física</h1>
            <a href="../index.php">Voltar</a>
            <br><br>
            <!--
            <form method="POST" action="<?php $cadPFs->inserir();?>">
            -->
            <form method="POST">
            <input type="text" name="nome" required placeholder="Nome aqui...">
            <br><br>
            <input type="tel" name="tel" required placeholder="Telefone aqui...">
            <br><br>
            <input type="email" name="email" required placeholder="E-mail aqui...">
            <br><br>
            <input type="text" name="endereco" required placeholder="Endereço aqui...">
            <br><br>
            <input type="number" name="cpf" required placeholder="CPF aqui...">
            <br><br>
            <input type="radio" name="sexo" required value="F"> Feminino<br>
            <input type="radio" name="sexo" required value="M"> Masculino
            <br><br>
            <input type="submit" name="salvarPF" value="SALVAR">
            <br><br>
            <input type="reset" name="limpar" value="LIMPAR">
            </form>

            <?php
                $cadPFs->getAllPF();
            ?>
        </td>
    </tr>
</table>

</body>
</html>