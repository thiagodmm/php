<!DOCTYPE html>

<?php 
$pjs = $_REQUEST['pjs'];
$pessoasJBD = $_REQUEST['pjsBD'];
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
            <h1>Lista de Pessoas Jurídicas</h1>
        </td>
    </tr>
</table>

<table style="margin:10px">
    <tr style="margin:10px; background-color:lightgray">
        <th style="margin:10px; padding: 10px;">Nome</th>
        <th style="margin:10px; padding: 10px;">CNPJ</th>
        <th style="margin:10px; padding: 10px;">Nome Fantasia</th>
        <th style="margin:10px; padding: 10px;">Telefone</th>
        <th style="margin:10px; padding: 10px;">E-mail</th>
        <th style="margin:10px; padding: 10px;">Endereço</th>
    </tr>

    <!-- Nova Tabela a partir do BD -->
    <?php
        if ($pessoasJBD == null){
            echo "Tabela vazia.";
        }else{
            foreach ($pessoasJBD as $pj):
            ?>
            <tr>
                <td style="margin:10px; padding: 10px;"><?php echo $pj['nome']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pj['cnpj']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pj['nomeFantasia']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pj['telefone']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pj['email']; ?></td>

                <td style="margin:10px; padding: 10px;"><?php echo $pj['endereco']; ?></td>

            </tr>
            <?php
            endforeach;
        }
    ?>



</table>

</body>
</html>