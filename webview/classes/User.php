<?php
class User{
	private $id;
	private $name;
	private $email;
	private $password;

	public function setUser($name, $email, $password){
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	}
	public function save($name,$email, $password) {
		try{
			$db=Database::conexao();
			$stmt = $db->prepare("INSERT INTO `users` (`name`, `email`, `passwd`) VALUES ( :name, :email, :passwd);");
			$stmt->bindValue(':name', $name);
			$stmt->bindValue(':email', $email);
			$stmt->bindValue(':passwd', $password);
			$stmt->execute();
	    }catch(PDOException $e) {
	        echo 'Error: ' . $e->getMessage();
	    }
	}

	public function getId()
	{	
		return $this->id;
	}


	public function login($name, $password){
		try{
	        $db=Database::conexao();
	        $stmt = $db->query("SELECT * FROM users WHERE name = '".$name."' and passwd = '".$password."';");
	       	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	        		
	        return $user;
	    }catch(PDOException $e) {
	        echo 'Error: ' . $e->getMessage();
	    }
    }

	public function getUser($name){
		try{
	        $db=Database::conexao();
	        $stmt = $db->query("SELECT id,name, email FROM users WHERE name = '".$name."';");
	       	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	        		
	        return $user;
	    }catch(PDOException $e) {
	        echo 'Error: ' . $e->getMessage();
	    }
    }

	/**
	 * @method update atualiza usuario
	 * @param $name nome
	 * @param $email email antigo
	 * @param $password senha
	 * @param $oldName
	 * @param $oldEmail
	 */
	public function update($id,$name, $email, $password){
		try{
	        $db=Database::conexao();
			$stmt = $db->prepare('UPDATE users SET `name` = "'.$name.'" , email = "'.$email.'" , passwd = "'.$password.'" WHERE id = '.$id.';');
			$stmt->execute();
			return true;
	    }catch(PDOException $e) {
	        echo 'Error: ' . $e->getMessage();
	    }
    }



	public function excluir($name, $email, $password){
		try{
	        $db=Database::conexao();
			$stmt = $db->prepare('DELETE FROM users WHERE name = "'.$email.'" and passwd = "'.$password.'";');
			$stmt->execute();
			return true;
	    }catch(PDOException $e) {
	        echo 'Error: ' . $e->getMessage();
	    }
    }
}
