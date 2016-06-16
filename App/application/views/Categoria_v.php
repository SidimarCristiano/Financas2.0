<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Finanças Pessoais: Categorias de Finanças</title>
</head>
<body>
	<div class="container">
		<h2>Finanças Pessoais: Categorias de Finanças</h2>
		<div >
			<?= anchor('Categoria_c/novo', 'Nova Categoria'); ?>
		</div>
		<div class="row">
			<h3><?= $categorias->num_rows(); ?> registro(s)</h3>
		</div>
		<div class="row">
		<?php if ($categorias->num_rows() > 0): ?>
			<table>
				<thead>
					<tr>
						<th>Código</th>
						<th>Descrição</th>
						<th>Tipo</th>
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach($categorias->result() as $categoria): ?>
				<tr>
					<td><?= $categoria->id ?></td>
					<td><?= $categoria->descricao ?></td>
					<td><?= $categoria->tipo ?></td>
					<td><?= anchor("Categoria_c/editar/$categoria->id", "Editar") ?> | <?= anchor("Categoria_c/excluir/$categoria->id", "Excluir") ?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
		<h4>Nenhum registro cadastrado.</h4>
		<?php endif; ?>
		</div>
	</div>

</body>
</html>