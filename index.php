<!DOCTYPE html>
<html>

<?php
function geraLink($a,$s){
?>
<a href="./view/<?php echo $a ?>.php"><?php echo $s ?></a>
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
            <h1>Cadastro de Pessoas</h1>
            <?php geraLink('gerPessoaF', 'Cadastrar Pessoa Física');
            echo ' | ';
            geraLink('gerPessoaJ', 'Cadastrar Pessoa Jurídica');
            ?>

        </td>
    </tr>
</table>

</body>

</html>