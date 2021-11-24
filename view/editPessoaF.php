<!DOCTYPE html>
<?php
$pesUp = $_REQUEST['pfUpdate'];

$pfBD = new cPessoaF();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Física</title>
    </head>
    <body>
        <h3>Editar Pessoa Física</h3>
        <form method="POST" action="<?php  ?>">

            <input type="hidden" name="idPessoa" value="<?php foreach ($pesUp as $pf):echo $pf['idPessoa'];endforeach;?>" />

            <label for:"nome">Nome:<br>
            <input type="text" name="nome" required value="<?php foreach ($pesUp as $pf):echo $pf['nome'];endforeach;?>" />
            </label>
            <br><br>
            <label for:"tel">Telefone:<br>
            <input type="tel" name="tel" required value="<?php foreach ($pesUp as $pf):echo $pf['telefone'];endforeach;?>" />
            </label>
            <br><br>
            <label for:"email">E-mail:<br>
            <input type="email" name="email" required value="<?php foreach ($pesUp as $pf):echo $pf['email'];endforeach;?>" />
            </label>
            <br><br>
            <label for:"endereco">Endereço:<br>
            <input type="text" name="endereco" required value="<?php foreach ($pesUp as $pf):echo $pf['endereco'];endforeach;?>" />
            </label>
            <br><br>
            <label for:"cpf">CPF:<br>
            <input type="number" name="cpf" required value="<?php foreach ($pesUp as $pf):echo $pf['cpf'];endforeach;?>" />
            </label>
            <br><br>

            <label for:"sexo">Sexo:<br>

            <input type="radio" name="sexo" required value="F" <?php foreach ($pesUp as $pf):if($pf['sexo']=="F"){echo "checked";};endforeach;?>> 
            Feminino<br>

            <input type="radio" name="sexo" required value="M" <?php foreach ($pesUp as $pf):if($pf['sexo']=="M"){echo "checked";};endforeach;?>> Masculino 

            </label>

            <br><br>
            <input type="submit" name="salvarPF" value="SALVAR">
            <br><br>
            <input type="reset" name="limpar" value="LIMPAR">

        </form>

        <?php 
        // Código PHP aqui

        ?>
    </body>
</html>