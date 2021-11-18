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
            <h1>Lista Pessoas Físicas</h1>
        </td>
    </tr>
</table>

<table>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Sexo</th>
    </tr>
    <tr>
    </tr>

    <?php
        // Código vai aqui.
        foreach ($pfs as $pf):
    ?>
    <tr>
        <td>
        <?php echo $pf->getNome(); ?>
        </td>
        <td>
        <?php echo $pf->getCpf(); ?>
        </td>
        <td>
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