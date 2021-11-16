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
	
	public function __toString() {
		$pes = '- Nome: ' . $this->getNome() . '<br>'
		. ' - Telefone: ' . $this->getTelefone() . '<br>'
		. ' - E-mail: ' . $this->getEmail() . '<br>'
		. ' - Endereço: ' . $this->getEndereco() . '<br>'
		. ' - CNPJ: ' . $this->getCnpj() . '<br>'
		. ' - Nome Fantasia: ' . $this->getNomeFantasia() . '<br><br>';
		return $pes;
	}

}