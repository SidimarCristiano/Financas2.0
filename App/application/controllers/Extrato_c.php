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

		
	}
}

?>