<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suas Finanças:</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap Core CSS -->
	<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/bootstrap/css/meu-css.css">


</head>
<body>
<label><a href="#">Alterar Dados da Conta</a> <br><br></label>
<ul>
	<li><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?></li>
</ul>

	<div class="container">
		<h1 class="text-center">Finanças:</h1>
		<div class="col-md-12">
		<form action="POST" ></form>
            <table border="1" class="table table-striped" >
					<thead>
						<tr>
                                <th>Categoria</th>
                                <th>Valor (R$)</th>
                                <th>Total (R$)</th>
                                <th>Acoes</th>
						</tr>
					</thead>
					<tr><!--linha(tabel row)-->
							<td>Categoria 1 </td><!--(table data)-->
							<td> valor 2</td>
							<td> valor </td>
                        <td>  <button name="excluir" value="excluir">Excluir</button>
                            <button name="atualizar" value="atualizar">Atualizar</button></td>
                    </tr>
					<tr>
						<? foreach($rendimentos->result() as $cadastro): ?>
							<tr>
								<td><?= $rendimentos->id ?></td>
								<td><?= $rendimentos->nome ?></td>
								<td><?= $cadastro->telefone ?></td>
								<td><?= $cadastro->email ?></td>
								<td><?= $cadastro->observacoes ?></td>
								<td><?= anchor("cadastro/edit/$cadastro->id", "Editar") ?>
									| <a href="#" class='confirma_exclusao' data-id="<?= $cadastro->id ?>" data-nome="<?= $cadastro->nome ?>" />Excluir</a></td>
							</tr>
						<? endforeach; ?>
						<td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>  <button name="excluir" value="excluir">Excluir</button>
                            <button name="atualizar" value="atualizar">Atualizar</button></td>
					</tr>
				</table>
            <button name="incluir" type="submit" value="excluir">Incluir</button>

					<h4>Nenhum registro cadastrado.</h4>
			</div>
		</div>	
	</div>

	
</body>
</html>