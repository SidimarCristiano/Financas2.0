<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?= $titulo ?> - Controle de Finanças Pessoais</title>

</head>
<body>
	<div class="container">
		<h1 class="text-center"><?= $titulo ?></h1>
		<div class="container">
			<div class="row">
				<?= form_open('LoginCadastro_c/salvar')  ?>
					<div class="container">
						<label for="usuario">Usuário</label><span class="erro"><?php echo form_error('usuario') ?  : ''; ?></span>
						<input type="text" name="usuario" id="usuario" class="form-control" value="<?= set_value('usuario') ? : (isset($usuario) ? $usuario : '') ?>" autofocus='true' />
					</div>
					<div class="container">
						<label for="senha">Senha</label><span class="erro"><?php echo form_error('senha') ?  : ''; ?></span>
						<input type="password" name="senha" id="senha" class="form-control" value="<?= set_value('senha') ? : (isset($senha) ? $senha : ''); ?>" />
					</div>
					<div class="container">
						<label for="nome">Nome</label><span class="erro"><?php echo form_error('nome') ?  : ''; ?></span>
						<input type="nome" name="nome" id="nome" class="form-control" value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ; ?>" />
					</div>
					<div class="container">
						<label for="valor_inicial">Valor Inicial</label><span class="erro"><?php echo form_error('nome') ?  : ''; ?></span>
						<input type="nome" name="valor_inicial" id="valor_inicial" class="form-control" value="<?= set_value('valor_inicial') ? : (isset($valor_inicial) ? $valor_inicial : '') ; ?>" />
					</div>

					<div class="container text-right">
						<input type="submit" value="Salvar" class="btn btn-success" />
					</div>
					<input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
				<?= form_close(); ?>
			</div>
			<div class="row"><hr></div>
			<div class="row">
				<?= anchor('', 'Home_c') ?>
			</div>
		</div>	
	</div>
</body>
</html>