<?php

/* Trabalhando com Classes
* Descrição de pessoaJ
* @author ThiagoMachado
*/

class pessoaJ extends pessoa {
	//Código aqui
	private $cnpj;
	private $nomeFantasia;
	
	public function pessoaJ() {
		
	}
	
	public function getCnpj() {
		return $this->cnpj;
	}
	
	public function getNomeFantasia() {
		return $this->nomeFantasia;
	}
	
	public function setCnpj($cnpj): void {
		$this->cnpj = $cnpj;
	}
	
	public function setNomeFantasia($nomeFantasia): void {
		$this->nomeFantasia = $nomeFantasia;
	}

}