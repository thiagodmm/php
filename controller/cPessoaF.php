<?php

/* Trabalhando com Classes
* Descrição de cPessoaF
* @author ThiagoMachado
*/
require_once '../model/pessoaF.php';

class cPessoaF {
	
	//Código aqui
	private $pf = []; // Array de Pessoas Físicas
	
	public function __construct() {
		$this->mokPF();
	}
	
	public function mokPF() {
		$pf1 = new pessoaF();
		$pf1->setNome('Luke S');
		$pf1->setTelefone(5155512027);
		$pf1->setEmail('luke@gmail.com');
		$pf1->setEndereco('Tattooine');
		$pf1->setCpf(56723497034);
		$pf1->setSexo('M');
		$this->addPessoaF($pf1);
		
		$pf2 = new pessoaF();
		$pf2->setNome('Leia O');
		$pf2->setTelefone(51555555555);
		$pf2->setEmail('leia@gmail.com');
		$pf2->setEndereco('Aldebaraan');
		$pf2->setCpf(4345332244);
		$pf2->setSexo('F');
		$this->addPessoaF($pf2);
	}
	
	public function getAllPF() {
		//return $this->pf;
        $_REQUEST['pfs'] = $this->pf;
        require_once '../view/listPessoaF.php';
	}
	
	public function imprime() {
		foreach ($this->pf as $pf):
		echo $pf;
		endforeach;
	}
	
	public function addPessoaF($p) {
		array_push($this->pf, $p);
	}
	
    public function inserir() {
        if(isset($_POST['salvarPF'])){
            $pf = new pessoaF();
            $pf->setNome($_POST['nome']);
            $pf->setTelefone($_POST['tel']);
            $pf->setEmail($_POST['email']);
            $pf->setEndereco($_POST['endereco']);
            $pf->setCpf($_POST['cpf']);
            $pf->setSexo($_POST['sexo']);
            $this->addPessoaF($pf);
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
            $Telefone = $_POST['tel'];
            $Email = $_POST['email'];
            $Endereco = $_POST['endereco'];
            $Cpf = $_POST['cpf'];
            $Sexo = $_POST['sexo'];

            $sql = "insert into `pessoa` (`nome`, `telefone`, `email`, `endereco`, `cpf`, `sexo`) values ('$Nome','$Telefone','$Email','$Endereco','$Cpf','$Sexo')";

            $result = mysqli_query($conexao, $sql);

            if(!$result){
                die("Erro ao inserir. " . mysqli_error($conexao));
            }
            mysqli_close($conexao);

        }
    }

    public function getAllBD(){
        
    }


	
}