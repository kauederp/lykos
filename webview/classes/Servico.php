<?php
require_once "./classes/Database.php";
class Servico{
	
	private $numero;
	private $endereco;
	private $nome;
	private $preco;
	private $avaliacao;

	public function setServico($numero,$endereco,$nome,$preco,$avaliacao){
		$this->numero = $numero;
		$this->endereco = $endereco;
		$this->nome = $nome;
		$this->preco = $preco;
		$this->avaliacao = $avaliacao;
	}

	public function getName()
	{
		return $this->nome;
	}
	public function getEndereco()
	{
		return $this->endereco;
	}
	public function salvar($nome) {
        try{
            $db=Database::conexao();
            $stmt = $db->prepare("INSERT INTO  (nome) VALUES (:nome);");
            $stmt->bindParam(':nome', $nome);
            $stmt->execute();
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


}
