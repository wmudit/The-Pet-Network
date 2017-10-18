<?php
class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;
	
	private $dbHandler;
	private $error;
	private $statement;
	
	public function __constrct(){
		//Set DSN
		$dsn = 'mysql:host='. $this->host. ';dbname='. $this->db_name;
		
		//Set options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		
		//PDO Instance
		try{
			$this->dbHandler = new PDO($dsn, $this->user, $this->pass, $options);
		}catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}
	
	public function query($q){
		$this->statement = $this->dbHandler->prepare($q);
	}
	
	public function bin($param, $value, $type = null){
		if(is_null($ype)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;		
			}
		}
		$this->statement->bindValue($param, $value, $type);
	}
	
	public function execute(){
		return $this->statement->execute();
	}
	
	public function resultSet(){
		$this-execute();
		return $this->statement->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function single() {
		$this-execute();
		return $this->statement->fetch(PDO::FETCH_OBJ);
	}	
	
}