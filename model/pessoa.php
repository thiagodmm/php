<?php

/* Trabalhando com Classes
* Descrição de pessoa
* @author ThiagoMachado
*/

class pessoa {
	//Código aqui
	private $nome;
	private $telefone;
	private $email;
	private $endereco;
	
	public function pessoa() {
		
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function setNome($nome): void {
		$this->nome = $nome;
	}
	
	public function setTelefone($telefone): void {
		$this->telefone = $telefone;
	}
	
	public function setEmail($email): void {
		$this->email = $email;
	}
	
	public function setEndereco($endereco): void {
		$this->endereco = $endereco;
	}
	
}
