<?php 

class Cadastro{

	private $nome;
	private $email;
	private $senha;

	public function getNome():string{
		return $this->nome;
	} 

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha():string{
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function __toString(){
		//json_encode para transformar dados em uma string
		//json_decode para transformar uma string em dados
		return json_encode(array( 
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	}
}

 ?>