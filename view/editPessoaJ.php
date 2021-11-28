<!DOCTYPE html>
<?php
$idPessoaJ = 0;
if(isset($_POST['update'])){
    $idPessoaJ = $_POST['id'];
}
require_once '../controller/cPessoaJ.php';
$pjBD = new cPessoaJ();
$pesUp = $pjBD->getPessoaById($idPessoaJ);

// var_dump($pesUp);
// echo "<br>" . $pesUp[0]['nome'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Jurídica</title>
    </head>
    <body>
        <h3>Editar Pessoa Jurídica</h3>
        <form method="POST" action="<?php $pjBD->update(); ?>">

            <input type="hidden" name="idPessoa" value="<?php echo $pesUp[0]['idPessoa']; ?>" />

            <label for:"nome">Nome:<br>
            <input type="text" name="nome" required value="<?php echo $pesUp[0]['nome']; ?>" />
            </label>
            <br><br>
            <label for:"telefone">Telefone:<br>
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
            <label for:"cnpj">CNPJ:<br>
            <input type="number" name="cnpj" required value="<?php echo $pesUp[0]['cnpj']; ?>" />
            </label>
            <br><br>
            <label for:"nomefantasia">Nome Fantasia:<br>
            <input type="number" name="nomefantasia" required value="<?php echo $pesUp[0]['nomefantasia']; ?>" />
            </label>
            <br><br>

            <br><br>
            <input type="submit" name="updatePJ" value="Salvar Alterações"/>
            <input type="submit" name="cancelar" value="Cancelar"/>

        </form>

        <?php 
        // Código PHP aqui

        ?>
    </body>
</html>