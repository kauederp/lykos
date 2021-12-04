<?php
class Sugestao{
    private $id;
    private $texto;
    private $user;
   
    public function setTexto($texto){
            try{
                require_once('Database.php');
                $db=Database::conexao();
                
                $stmt = $db->prepare("INSERT INTO `sugestao` (`texto`) VALUES ( '$texto' );");
                $stmt->execute();
            }catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
    }

    public function getTexto($id)
    {
        try{
            require_once('Database.php');
            $db=Database::conexao();
            $stmt = $db->query("SELECT * FROM `sugestao` where `idSugestao` =$id");

            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo $linha['texto'];
            }
        }catch(PDOExcepetion $e){
            echo 'Error: ' . $e->getMessage();
        }
    }


}