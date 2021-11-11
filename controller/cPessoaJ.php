<?php

/* Trabalhando com Classes
* Descrição de cPessoaJ
* @author ThiagoMachado
*/
require_once '../model/pessoaJ.php';

class cPessoaJ {
	
	//Código aqui
	private $pj;
	
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
		$this->pj = $pj1;
		
		$pj2 = new pessoaJ();
		$pj2->setNome('Plinio Nuts');
		$pj2->setTelefone(51332223333);
		$pj2->setEmail('contato@espetinhoze.com.br');
		$pj2->setEndereco('Rua Soledade');
		$pj2->setCnpj(3232324422323);
		$pj2->setNomeFantasia('Espetinho do Gaúcho');
		$this->pj = $pj2;
	}
	
	public function getAllPJ() {
		return $this->pj;
	}
	
}