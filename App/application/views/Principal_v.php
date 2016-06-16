<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suas Finanças:</title>
</head>
<body>

<?php  ?>

<label><?= anchor("LoginCadastro_c/editar/".$usuario['id'],"Alterar dados da Conta") ?></label>
<label> || </label>
<label><?= anchor("Categoria_c/carregar","Gerenciar Categorias") ?></label>
<label> || </label>
<Label><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?><label>
<?php ?>

	<h1 class="text-center">Finanças:</h1>
		<div class="col-md-12">
		
            <table  border="1" class="table table-striped" >
            		<thead>
            			<tr><th colspan="5">Despesas</th></tr>
					
						<tr>
                                <th>Descricao</th>
                                <th>Valor (R$)</th>
                                <th>Data </th>
                                <th>Categoria</th>
                                <th>Acoes</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($despesas as $despesa){ ?>
							<tr>
								
								<td><?= $despesa['descricao'] ?></td>
								<td><?= $despesa['valor'] ?></td>
								<td><?= $despesa['data'] ?></td>
								<td><?= $despesa['categoria'] ?></td>
								<td><?= anchor("Despesas_c/editar/".$despesa['id_despesa'], "Editar") ?> |
								<?= anchor("Despesas_c/excluir/".$despesa['id_despesa'], "Excluir") ?>
									
							</tr>
						<?php } ?>
						
                        
					</tbody>
			</table>
			<?= anchor("Despesas_c/adcionar/", "Incluir") ?>
			</br>
			<hr>
			</br>
           <!-- Tabela de Receitas -->
					 <table  border="1" class="table table-striped" >
            			<thead>
            			<tr><th colspan="5">Receitas</th></tr>
						<tr>
                                <td>Descricao</td>
								<td>Valor</td>
								<td>Data</td>
								<td>Categoria</td>
								<td>Acoes</td>
						</tr>
					</thead>
					<tbody>
						<?php  foreach($receitas as $receita){ ?>
							<tr>
								
								<td><?= $receita['descricao'] ?></td>
								<td><?= $receita['valor'] ?></td>
								<td><?= $receita['data'] ?></td>
								<td><?= $receita['categoria'] ?></td>
								<td><?= anchor("Receitas_c/editar/".$receita['id_receita'], "Editar") ?> |
								<?= anchor("Receitas_c/excluir/".$receita['id_receita'], "Excluir") ?></td>
									
							</tr>
						<?php } ?>     
					</tbody>
			</table>
				<?= anchor("Receitas_c/adcionar/", "Incluir") ?>
			</br>
			<hr>
			</br>
			<!-- Tabela de Extrato -->
			<table  border="1" class="table table-striped" >
            			<thead>
            			<tr><th colspan="5">Extrato/listar todas dividas/receitas</th></tr>
						<tr>
                                <th>Data</th>
                                <th>Descricao (R$)</th>
                                <th>Tipo </th>
                                <th>Categoria</th>
                                <th>Saldo</th>
						</tr>
					</thead>
					<tbody>
					<?php  //foreach($extratos as $extrato){ ?>
								<tr>
								
								<td><!-- <?= $extrato['data'] ?> --></td>
								<td><!-- <?= $extrato['descricao'] ?> --></td>
								<td><!-- <?= $extrato['tipo'] ?> --></td>
								<td><!-- <?= $extrato['categoria'] ?> --></td>
								<td><!-- <?= $extrato['saldo'] ?> --></td>
									
							</tr>
						<?php// } ?>     
						<? ?>     
					</tbody>
			</table>
			</br>
			<hr>
			</br>
				<!-- Tabela de Rendimentos -->
				<table  border="1" class="table table-striped" >
            		<thead>
            			<tr><th colspan="4">Rendimentos</th></tr>
						<tr>
                                <th>Valor</th>
                                <th>Percentual Rendimentos %/mes</th>
                                <th>lucro </th>
                                <th>Seu saldo</th>
                              
						</tr>
					</thead>
					<tbody>
						<?php  ?>
							<tr>
								
								<td>Valor investido</td>
								<td>Percentual/periodo</td>
								<td>lucro do investimento</td>
								<td>Saldo ate aquele momento</td>
							<!--<td><?= anchor("Despesas_c/editar/", "Editar") ?> |
								<?= anchor("Despesas_c/excluir/", "Excluir") ?>-->
									
							</tr>
						<? ?>     
					</tbody>
			</table>
			<input type="submit" value="Incluir"></input>
			</div>
		</div>	


</body>
</html>