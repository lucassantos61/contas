<?php
	class ConnectionFactory{
		public static function getConnetion(){
			$conn = new \PDO("mysql:host=localhost;dbname=contas;","root","",array(\PDO::ATTR_PERSISTENT => true));
			return $conn;
		}
	}

?>
