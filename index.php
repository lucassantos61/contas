<?php
	require_once 'class/Contas.php';
	$conta = new Contas('conta de luz','10/09/2016',50.00);
	echo 'Conta : '.$conta->getNome().' Valor : '.$conta->getValor().' Data Vencimento: '.$conta->getVencimento();
	$conta->setDataPgto('12/09/2016');
	echo "<br>";
	echo 'Data Pagamento : '.$conta->getDataPgto();
?>
