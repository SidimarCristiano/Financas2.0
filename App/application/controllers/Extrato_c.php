<?php  

class Principal_c extends CI_Controller
{
	public $dados =array();
	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model("Despesas_m");
        $this->load->model("Receitas_m");
        $this->load->model("Categoria_m");
        $this->load->model("extrato_m");
	}


	public function carregarDados(){

       	  $despUsuario=$this->Despesas_m->get($usuario['id']);
          $despUsuario=$despUsuario->result_array();//convertendo pra array.
          $dados['despesas']=$despUsuario;

           //carrega receitas de usuario
       	  $receitaUsuario=$this->Receitas_m->get($usuario['id']);
          $receitaUsuario=$receitaUsuario->result_array();//convertendo pra array.
          $dados['receitas']=$receitaUsuario;
			
		$this->juncaoIncercao($dados);
			
	}

	// public function juncaoIncercao($dados){
	// 	foreach ($dados as $key => $value) {
	// 		print_r($value);
		
	// 		foreach ($value as $chave => $valor) {
	// 			$arrayName = array("$chave" => $valor);
	// 		}
	// 		die();
	// 	}


		
	}


}

?>