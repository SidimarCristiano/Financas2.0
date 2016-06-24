<?php  

class Extrato_c extends CI_Controller
{
	public $dados =array();

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model("Despesas_m");
        $this->load->model("Receitas_m");
        $this->load->model("Categoria_m");
        $this->load->model("Extrato_m");
	}


	// public function carregarDados(){

 //       	  $extUsuario=$this->extrato_m->get($usuario['id']);
 //          $extUsuario=$extUsuario->result_array();//convertendo pra array.
 //          $dados['extrato_m']=$extUsuario;

 //           //carrega receitas de usuario
 //       	  $receitaUsuario=$this->Receitas_m->get($usuario['id']);
 //          $receitaUsuario=$receitaUsuario->result_array();//convertendo pra array.
 //          $dados['receitas']=$receitaUsuario;
			
	// 	// $this->juncaoIncercao($dados);
			
	// }

	// public function juncaoIncercao($dados){
	// 	foreach ($dados as $key => $value) {
	// 		print_r($value);
		
	// 		foreach ($value as $chave => $valor) {
	// 			$arrayName = array("$chave" => $valor);
	// 		}
	// 		die();
	// 	}

	public function editar($idExtrato=null){

		$resultado = $this->Extrato_m->get($idExtrato);
		var_dump($resultado);
		die();
		$resultado = $resultado->result_array();
		$despesas['extrato'] = $resultado['0'];
		
		$despesas['categorias']=$this->Categoria_m->getCategoria();
		$this->load->view('EditarDespesa_v', $despesas);
	}


		
	


}

?>