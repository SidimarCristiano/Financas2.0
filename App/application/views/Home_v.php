<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Finanças Pessoais</title>
</head>
<body>
	<h1>Comece a acompanhar seus gastos!!</h1>
		<h2>Se já tem uma conta, faça login para acompanhar seus gastos.</h2>
		<h2>Se ainda ainda não possui uma conta, se cadastrase clicando no botao 'Cadastrar-se'.</h2>
		<br>
		
		<?= form_open('LoginCadastro_c/autenticar')  ?>
			<div class="container">

				<div class="container">
						<label for="usuario">Usuário: </label><span class="erro"><?php echo form_error('usuario') ?  : ''; ?></span>
						<input type="text" name="usuario" id="usuario" class="form-control" value="<?= set_value('usuario') ? : (isset($usuario) ? $usuario : '') ?>" autofocus='true' />
					</div>
					<div class="container">
						<label for="senha">Senha: </label><span class="erro"><?php echo form_error('senha') ?  : ''; ?></span>
						<input type="password" name="senha" id="senha" class="form-control" value="<?= set_value('senha') ? : (isset($senha) ? $senha : ''); ?>" />
					</div>

					<div class="container text-right">
						<input type="submit" value="logar" class="btn btn-success" />
					</div>
					<input type='hidden' name="credenciais" value="<?= set_value('usuario','senha') ? : (isset($usuario, $senha) ? $usuario and $senha : ''); ?>">
				<?= form_close(); ?>
			</div>
		<br>
			<ul>
				<li><?= anchor('LoginCadastro_c/inserir','Cadastrar-se','title="Realizar cadastro"') ?></li>
			</ul>

</body>
</html>