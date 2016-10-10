<?php require_once'cabecalho.php';?>


	<h1>Cadastro de contas</h1>
	<form action = "teste.php" method="POST">
		<div class = "form-group">
				<span>Nome da conta : </span>
			<input type="text" name="nome" class = "form-control" required/>
		</div>
		<div class = "form-group">
			<span>Valor : </span>
			<input type="number" name="valor" class = "form-control" step ='0.01'  min = '0.00' required/>
		</div>
		<div class = "form-group">
			<span>Data de vencimento : </span>
			<input type="date" name="data" class="form-control" required/>
		</div>
		<div class = "form-group">
			<span>Data pagamento : </span>
			<input type="date" name="datapgto" class = "form-control"/>
		</div>
		<div class = "form-group">
			<input type="submit" name="cadastra" value = "Cadastrar" class = "pos-button btn btn-lg btn-primary">
		</div>
	</form>


<?php require_once'rodape.php'?>