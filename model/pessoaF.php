<?php

/* Trabalhando com Classes
* Descrição de pessoaF
* @author ThiagoMachado
*/

class pessoaF extends pessoa {
	//Código aqui
	private $cpf;
	private $sexo;
	
	public function __construct() {
		
	}
	
	public function pessoaF(){
		
	}
	
	public function getCpf() {
		return $this->cpf;
	}
	
	public function getSexo() {
		return $this->sexo;
	}
	
	public function setCpf($cpf): void {
		$this->cpf = $cpf;
	}
	
	public function setSexo($sexo): void {
		$this->sexo = $sexo;
	}
	
	
}