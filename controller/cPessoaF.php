<?php

/* Trabalhando com Classes
* Descrição de cPessoaF
* @author ThiagoMachado
*/
require_once './model/pessoaF.php';

class cPessoaF {
	
	//Código aqui
	private $pf = []; // Array de Pessoas Físicas
	
	public function __construct() {
		$this->mokPF();
	}
	
	public function mokPF() {
		$pf1 = new pessoaF();
		$pf1->setNome('Thiago de Moura Machado');
		$pf1->setTelefone(51991412027);
		$pf1->setEmail('thiagodmm@gmail.com');
		$pf1->setEndereco('Rua Ari Marinho 57/302');
		$pf1->setCpf(67636497034);
		$pf1->setSexo('M');
		$this->addPessoaF($pf1);
		
		$pf2 = new pessoaF();
		$pf2->setNome('Sophia Nunes Machado');
		$pf2->setTelefone(51555555555);
		$pf2->setEmail('sosomachado@gmail.com');
		$pf2->setEndereco('Rua Ari Marinho 57/302');
		$pf2->setCpf(4345332244);
		$pf2->setSexo('F');
		$this->addPessoaF($pf2);
	}
	
	public function getAllPF() {
		return $this->pf;
	}
	
	public function imprime() {
		foreach ($this->pf as $pf):
		echo $pf;
		endforeach;
	}
	
	public function addPessoaF($p) {
		array_push($this->pf, $p);
	}
	
	
}