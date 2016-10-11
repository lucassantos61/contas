<?php
	/*function carregaClasse($nomeDaClasse){
		require_once("class/../".$nomeDaClasse.".php");
	}
	spl_autoload_register("carregaClasse");*/
	require_once("../class/Contas.php");
 class ContaFactory{
 	private $conta;
 	function __construct($dados){
 		$this->conta = new Contas($dados['nome'],$dados['valor'],$dados['data']);	
 		if (isset($dados['datapgto'])){
 			$this->conta->setDataPgto($dados['datapgto']);
 		}
 	}
 	public function CriaConta(){
 		return $this->conta;
 	}
 	public function mostra(){
 		print_r($this->conta);
 	}
 }

?>