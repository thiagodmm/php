<!DOCTYPE html>

<?php $pfs = $_REQUEST['pfs'];?>


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
    </tr>

    <?php
        // Código vai aqui.
        foreach ($pfs as $pf):
    ?>
    <tr style="margin:10px">
        <td style="margin:10px; padding: 10px;">
        <?php echo $pf->getNome(); ?>
        </td>
        <td style="margin:10px; padding: 10px;">
        <?php echo $pf->getCpf(); ?>
        </td>
        <td style="margin:10px; padding: 10px;">
        <?php if($pf->getSexo() == "F"){
            echo "Feminino";
        } else {
            echo "Masculino";
        }
        echo ""; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>