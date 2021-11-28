<!DOCTYPE html>

<?php
/* 
$pjs = $_REQUEST['pjs'];
$pessoasJBD = $_REQUEST['pjsBD'];
*/

$pjs = $_REQUEST['pjs'];
$pessoasJBD = $_REQUEST['pjsBD'];
$pjsdb = new cPessoaJ();

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
        <th style="margin:10px; padding: 10px;">Funções</th>
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

                <td style="margin:10px; padding: 10px;">

                <!-- Botões de Editar e Deletar | 2 Forms separados -->

                <form action="editPessoaJ.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $pf['idPessoa']; ?>"/>
                    <input type="submit" name="update" value="Editar"/>
                </form>

                <form action="<?php $pjsdb->funcoes(); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $pj['idPessoa']; ?>"/>
                    <input type="submit" name="delete" value="Deletar"/>
                </form>
                
                </td>

            </tr>
            <?php
            endforeach;
        }
    ?>



</table>

</body>
</html>