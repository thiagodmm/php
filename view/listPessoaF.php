<!DOCTYPE html>

<?php 
$pfs = $_REQUEST['pfs'];
$pessoasFBD = $_REQUEST['pfsBD'];
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
            <h1>Lista de Pessoas Físicas</h1>
        </td>
    </tr>
</table>

<table style="margin:10px">
    <tr style="margin:10px; background-color:lightgray">
        <th style="margin:10px; padding: 10px;">Nome</th>
        <th style="margin:10px; padding: 10px;">CPF</th>
        <th style="margin:10px; padding: 10px;">Sexo</th>
        <th style="margin:10px; padding: 10px;">Telefone</th>
        <th style="margin:10px; padding: 10px;">E-mail</th>
        <th style="margin:10px; padding: 10px;">Endereço</th>
    </tr>

    <!-- Nova Tabela a partir do BD -->
    <?php
        if ($pessoasFBD == null){
            echo "Tabela vazia.";
        }else{
            foreach ($pessoasFBD as $pf):
            ?>
            <tr>
                <td style="margin:10px; padding: 10px;"><?php echo $pf['nome']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pf['cpf']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php 
                    if($pf['sexo'] == "F") {
                    echo "Feminino";
                }else{
                    echo "Masculino";
                }
                ?>
                </td>

                <td style="margin:10px; padding: 10px;"><?php echo $pf['telefone']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pf['email']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pf['endereco']; ?></td>

            </tr>
            <?php
            endforeach;
        }
    ?>



</table>

</body>
</html>