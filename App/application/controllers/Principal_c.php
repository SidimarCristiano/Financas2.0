<?php

/**
* 
*/
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
        $this->load->model("Extrato_m");
        
	}

	public function index(){
		
		     $usuario = $this->session->userdata('usuario');
         $this->dados['usuario'] = $usuario;

          //carrega despesas de usuario

       	  $despUsuario=$this->Despesas_m->get($usuario['id']);
          $despUsuario=$despUsuario->result_array();//convertendo pra array.
          $this->dados['despesas']=$despUsuario;

           //carrega receitas de usuario
       	  $receitaUsuario=$this->Receitas_m->get($usuario['id']);
          $receitaUsuario=$receitaUsuario->result_array();//convertendo pra array.
          $this->dados['receitas']=$receitaUsuario;


         //carrega extrato de usuario
       	  // $extraUsuario=$this->Extrato_m->carregarDados($usuario['id']);
          // $extraUsuario=$extraUsuario->result_array();//convertendo pra array.
          // $this->dados['extratos']=$extraUsuario;

          

          $this->load->view('Principal_v', $this->dados);

	}
}


  ?>