<!DOCTYPE html>
<?php
$idPessoaF = 0;
if(isset($_POST['update'])){
    $idPessoaF = $_POST['id'];
}
require_once '../controller/cPessoaF.php';
$pfBD = new cPessoaF();
$pesUp = $pfBD->getPessoaById($idPessoaF);

// var_dump($pesUp);
// echo "<br>" . $pesUp[0]['nome'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Física</title>
    </head>
    <body>
        <h3>Editar Pessoa Física</h3>
        <form method="POST" action="<?php $pfBD->update(); ?>">

            <input type="hidden" name="idPessoa" value="<?php echo $pesUp[0]['idPessoa']; ?>" />

            <label for:"nome">Nome:<br>
            <input type="text" name="nome" required value="<?php echo $pesUp[0]['nome']; ?>" />
            </label>
            <br><br>
            <label for:"tel">Telefone:<br>
            <input type="tel" name="tel" required value="<?php echo $pesUp[0]['telefone']; ?>" />
            </label>
            <br><br>
            <label for:"email">E-mail:<br>
            <input type="email" name="email" required value="<?php echo $pesUp[0]['email']; ?>" />
            </label>
            <br><br>
            <label for:"endereco">Endereço:<br>
            <input type="text" name="endereco" required value="<?php echo $pesUp[0]['endereco']; ?>" />
            </label>
            <br><br>
            <label for:"cpf">CPF:<br>
            <input type="number" name="cpf" required value="<?php echo $pesUp[0]['cpf']; ?>" />
            </label>
            <br><br>

            <label for:"sexo">Sexo:<br>

            <input type="radio" name="sexo" required value="F" <?php if($pesUp[0]['sexo']=="F"){echo "checked";} ?>> 
            Feminino<br>

            <input type="radio" name="sexo" required value="M" <?php if($pesUp[0]['sexo']=="M"){echo "checked";} ?>> Masculino 

            </label>

            <br><br>
            <input type="submit" name="updatePF" value="Salvar Alterações"/>
            <input type="submit" name="cancelar" value="Cancelar"/>

        </form>

        <?php 
        // Código PHP aqui

        ?>
    </body>
</html>