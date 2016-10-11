<?php
	class ContaDAO{
		private $conn;
		private $conta;
		public function __construct($conn,$conta){
			$this->conn = $conn;
			$this->conta = $conta;
		}

		public function insereConta(){
			$datapgto = $this->conta->existePgto();
			$pgto = isset($datapgto) ? $datapgto : '';
			$query = "INSERT INTO conta (nome,valor,datavenc,datapgto) VALUES (:nome,:valor,:datavenc,:datapgto)";
			$statement = $this->conn->prepare($query);
			$statement->bindValue(':nome',$this->conta->getNome());
			$statement->bindValue(':valor',$this->conta->getValor());
			$statement->bindValue(':datavenc',$this->conta->getVencimento());
			$statement->bindValue('$datapgto',$pgto);
			print_r($query);
			//return $statement->execute();
		}
	}
?>