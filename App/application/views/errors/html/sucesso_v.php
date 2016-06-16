<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aviso - Controle de Finanças Pessoais</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Mensagem</h1>
		<div class="col-md-12">
			<div class="row">
				<div class="alert alert-success text-center">
					<?= $mensagem; ?>
				</div>
			</div>
			<div class="row text-center">
				<?= anchor('Principal_v', 'Pagina inicial');  ?>
			</div>
		</div>	
	</div>
</body>
</html>