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
<h1><?= $titulo ?></h1>
	<div class="row">
		<?= form_open('Categoria_c/salvar') ?>
		<div>
			<label for="descricao">Descrição:</label>
			<input type="text" name="descricao" id="descricao"  value="<?= set_value('descricao') ? : (isset($descricao) ? $descricao : '') ?>" autofocus='true' />
		</div>
		<div>
			<label for="tipo">Tipo:</label>
			<select type="text" name="tipo" id="tipo" value="<?= set_value('tipo') ? : (isset($tipo) ? $tipo : '') ?>">
				<option value="receita">Receita</option>
				<option value="despesa">Despesa</option>				
			</select>
		</div>

		<div>
			<input type="submit" value="Salvar" class="btn btn-success" />
		</div>
			<input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
			<?= form_close(); ?>
		
	</div>
	<div >
			<?= anchor('Categoria_c', 'Voltar') ?>
	</div>
	
</div>

</body>