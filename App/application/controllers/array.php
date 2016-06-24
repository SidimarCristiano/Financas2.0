<?php
Array (
		 [despesas] => Array ( 
		 			[0] => Array ( [id_despesa] => 11 [id_usuario] => 1 [descricao] => site que nao fiz [valor] => 200 [data] => 0000-00-00 [saldo] => 0 [categoria] => salario )
		 	 		[1] => Array ( [id_despesa] => 10 [id_usuario] => 1 [descricao] => gasolina [valor] => 45 [data] => 0000-00-00 [saldo] => 0 [categoria] => transporte ) ) 
		 [receitas] => Array ( 
		 			[0] => Array ( [id_receita] => 21 [id_usuario] => 1 [valor] => 60 [data] => 0000-00-00 [descricao] => deu boa [categoria] => formatei um pc ) 
		 			[1] => Array ( [id_receita] => 16 [id_usuario] => 1 [valor] => 1234 [data] => 0000-00-00 [descricao] => porque [categoria] => transporte ) ) 
		 );



	$dados[receitas]['0'];
	$dados[receitas]['1'];
	$dados[receitas]['0'];
	$dados[receitas]['1'];
	$dados['tipo'] = if($despesa) $despesa else $receita;

	 $arrayName = array('[0]' => , '');

	 Array ( [0] => Array ( [id_despesa] => 11 [id_usuario] => 1 [descricao] => site que nao fiz [valor] => 200 [data] => 0000-00-00 [saldo] => 0 [categoria] => salario ) 
	 		[1] => Array ( [id_despesa] => 10 [id_usuario] => 1 [descricao] => gasolina [valor] => 45 [data] => 0000-00-00 [saldo] => 0 [categoria] => transporte )
	 		 [2] => Array ( [id_receita] => 21 [id_usuario] => 1 [valor] => 60 [data] => 0000-00-00 [descricao] => deu boa [categoria] => formatei um pc ) [3] => Array ( [id_receita] => 16 [id_usuario] => 1 [valor] => 1234 [data] => 0000-00-00 [descricao] => porque [categoria] => transporte ) )
?>