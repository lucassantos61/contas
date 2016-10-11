<?php
	class Contas{
		private $valor;
		private $datapgto;
		private $vencimento;
		private $nome;
	
		function __construct($nome,$valor,$vencimento){
			$this->nome = $nome;
			$this->vencimento = $vencimento;
			$this->valor = $valor;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getVencimento(){
			return $this->vencimento;
		}
	
		public function getValor(){
			return $this->valor;
		}
		public function setDataPgto($data){
			$this->datapgto = $data;
		}
		public function existePgto(){
			if(isset($this->datapgto)){
				return $this->datapgto;
			}else{
				return false;
			}
		}
	}

?>
