<!DOCTYPE html>

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
            <?php
                // Código vai aqui.
                require_once '../controller/cPessoaF.php';
                $cadPFs = new cPessoaF();
                $cadPFs->getAllPF();
            ?>
        </td>
    </tr>
</table>

</body>
</html>