<?php
	
		
		require_once("../factory/ConnectionFactory.php");
		require_once("../factory/ContaFactory.php");
		require_once("../DAO/ContaDAO.php");
		
	$ContaFactory = new ContaFactory($_POST);
	$conta = $ContaFactory->CriaConta();
	$ContaDAO = new ContaDAO(ConnectionFactory::getConnection(),$conta);
	if($ContaDAO->insereConta()){
		echo "Inserção efetuada";
	}else{
		echo "Não inseriu";	
	}
	//$conta->mostra();
	
?>