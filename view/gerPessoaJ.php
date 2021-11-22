<!DOCTYPE html>

<?php 
require_once '../controller/cPessoaJ.php';
$cadPJs = new cPessoaJ();
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
        <h1>Cadastrar Pessoa Jurídica</h1>
        <a href="../index.php">Voltar</a>
        <br><br>
        <form method="POST" action="<?php $cadPJs->inserirBD();?>">
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
            <label for:"cpf">CNPJ:<br>
            <input type="number" name="cnpj" required placeholder="CNPJ aqui...">
            </label>
            <br><br>
            <label for:"nomefantasia">Nome Fantasia:<br>
            <input type="text" name="nomefantasia" required placeholder="CNPJ aqui...">
            </label>
            <br><br>
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
            $cadPJs->getAllPJ();
        ?>
        </td>




    </tr>
</table>

</body>
</html>