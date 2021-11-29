<?php

/* Trabalhando com Classes
* Descrição de cPessoaJ
* @author ThiagoMachado
*/
require_once '../model/pessoaJ.php';

class cPessoaJ {
	
	//Código aqui
	private $pj = []; // Array de Pessoas Jurídicas
	
	public function __construct() {
		$this->mokPJ();
	}
	
	public function mokPJ() {
		$pj1 = new pessoaJ();
		$pj1->setNome('Senac');
		$pj1->setTelefone(51334434444);
		$pj1->setEmail('contato@senac-rs.com.br');
		$pj1->setEndereco('Av. Venâncio Aires');
		$pj1->setCnpj(444334343232);
		$pj1->setNomeFantasia('Senac Tech RS Poa');
		$this->addPessoaJ($pj1);
		
		$pj2 = new pessoaJ();
		$pj2->setNome('Plinio Nuts');
		$pj2->setTelefone(51332223333);
		$pj2->setEmail('contato@espetinhoze.com.br');
		$pj2->setEndereco('Rua Soledade');
		$pj2->setCnpj(3232324422323);
		$pj2->setNomeFantasia('Espetinho do Gaúcho');
		$this->addPessoaJ($pj2);
	}
	
	public function getAllPJ() {
		// return $this->pj;
        $_REQUEST['pjs'] = $this->pj;
        $this->getAllBD();
        require_once '../view/listPessoaJ.php';
	}
	
	public function addPessoaJ($p) {
		array_push($this->pj,$p);
	}
	
	public function imprimePJ() {
		foreach ($this->pj as $pj) {
			echo $pj;
		}
	}


    public function inserirBD() {
        if(isset($_POST['salvarPF'])){
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $schema = 'dev3n201';
            $conexao = mysqli_connect($host, $user, $pass, $schema);

            if(!$conexao){
                die("Erro ao conectar. " . mysqli_error($conexao));
            }

            $Nome = $_POST['nome'];
            $Telefone = $_POST['telefone'];
            $Email = $_POST['email'];
            $Endereco = $_POST['endereco'];
            $Cnpj = $_POST['cnpj'];
            $NomeFantasia = $_POST['nomefantasia'];

            $sql = "insert into `pessoa` (`nome`, `telefone`, `email`, `endereco`, `cnpj`, `nomefantasia`) values ('$Nome','$Telefone','$Email','$Endereco','$Cnpj','$NomeFantasia')";

            $result = mysqli_query($conexao, $sql);

            if(!$result){
                die("Erro ao inserir. " . mysqli_error($conexao));
            }
            mysqli_close($conexao);

        }
    }


    public function getAllBD(){

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $schema = 'dev3n201';
        $conexao = mysqli_connect($host, $user, $pass, $schema);

        if(!$conexao){
            die("Erro ao conectar. " . mysqli_error($conexao));
        }

        $sql = "select * from pessoa where cpf is null";
        $result = mysqli_query($conexao, $sql);
        if($result){
            $pjsBD = [];
            while ($row = $result->fetch_assoc()) {
                array_push($pjsBD,$row);
            }
            $_REQUEST['pjsBD'] = $pjsBD;
        }else {
            $_REQUEST['pjsBD'] = 0;
        }
        mysqli_close($conexao);

    }

    // Funções
    public function funcoes() {

        // Função para Deletar Pessoa
        if(isset($_POST['delete'])){

            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $schema = 'dev3n201';
            $conexao = mysqli_connect($host, $user, $pass, $schema);

            if(!$conexao){
                die("Erro ao conectar. " . mysqli_error($conexao));
            }

            $id = $_POST[id];
            $sql = "delete from pessoa where idPessoa = $id";
            $result = mysqli_query($conexao, $sql);
            if(!$result){
                die("Erro ao excluir: " . mysqli_error($conexao));
            }
            mysqli_close($_conexao);
            header('Refresh: 0'); // Recarregar a Página (F5) em 0 segundos
        }

    }


    public function getPessoaById($id) {

        // Atualizar Pessoa
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $schema = 'dev3n201';
        $conexao = mysqli_connect($host, $user, $pass, $schema);

        if(!$conexao){
            die("Erro ao conectar. " . mysqli_error($conexao));
        }

        $sql = "select * from pessoa where idPessoa=$id";
        $result = mysqli_query($conexao, $sql);
        if($result){
            $pjsBD = [];
            while ($row = $result->fetch_assoc()) {
                array_push($pjsBD,$row);
            }
            return $pjsBD;
        }
        mysqli_close($conexao); 
    }



    public function update(){
        if(isset($_POST['updatePJ'])){

            var_dump ($_POST);

            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $schema = 'dev3n201';
            $conexao = mysqli_connect($host, $user, $pass, $schema);

            if(!$conexao){
                die("Erro ao conectar. " . mysqli_error($conexao));
            }
            $idPessoa = $_POST['idPessoa'];
            $Nome = $_POST['nome'];
            $Telefone = $_POST['tel'];
            $Email = $_POST['email'];
            $Endereco = $_POST['endereco'];
            $Cnpj = $_POST['cnpj'];
            $Nomefantasia = $_POST['nomefantasia'];

            


            $sql = "UPDATE `pessoa` SET `nome`='$Nome',`telefone`='$Telefone',"
            . "`email`='$Email',`endereco`='$Endereco',`cnpj`='$Cnpj',"
            . "`nomefantasia`='$Nomefantasia' WHERE `idPessoa`='$idPessoa'";
            
            $result = mysqli_query($conexao, $sql);
            if(!$result){
                die("Erro ao atualizar Pessoa Jurídica!" . mysqli_error($conexao));
            }
            mysqli_close($conexao);
            header('Location: ../view/gerPessoaJ.php');
        }
        if(isset($_POST['cancelar'])){
            header('Location: ../view/gerPessoaJ.php');
        }

    }

	
}