<?php

class config{
private $user= 'root';
private $password= '';
public $pdo= null;


public function connection()
{
try{
       $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=todoapp',$this->user,$this->password);
    } catch (PDOException $e){
        die($e->getMessage());
    }
    return $this->pdo;
}
}

?>