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
        <td style="width:75px;">
        &nbsp;</td>
        <td>
            <h1>Cadastrar Pessoa Física</h1>
            <a href="../index.php">Voltar</a>
            <br><br>
            <form method="POST" action="<?php $cadPFs->inserirBD();?>">
            <label for:"nome">Nome:<br>
            <input type="text" name="nome" required placeholder="Nome aqui...">
            </label>
            <br><br>
            <label for:"tel">Telefone:<br>
            <input type="tel" name="tel" required placeholder="Telefone aqui...">
            </label>
            <br><br>
            <label for:"email">E-mail:<br>
            <input type="email" name="email" required placeholder="E-mail aqui...">
            </label>
            <br><br>
            <label for:"endereco">Endereço:<br>
            <input type="text" name="endereco" required placeholder="Endereço aqui...">
            </label>
            <br><br>
            <label for:"cpf">CPF:<br>
            <input type="number" name="cpf" required placeholder="CPF aqui...">
            </label>
            <br><br>
            <label for:"sexo">Sexo:<br>
            <input type="radio" name="sexo" required value="F"> Feminino<br>
            <input type="radio" name="sexo" required value="M"> Masculino
            </label>
            <br><br>
            <input type="submit" name="salvarPF" value="SALVAR">
            <br><br>
            <input type="reset" name="limpar" value="LIMPAR">
            </form>
        </td>
        <td style="width:50px;">
        &nbsp;</td>
        <td style="vertical-align: top;">
        <?php
            $cadPFs->getAllPF();  // Traz a lista de Pessoas Físicas na TD 
        ?>
        </td>
    </tr>
</table>

</body>
</html>