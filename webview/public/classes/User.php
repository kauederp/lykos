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
}
