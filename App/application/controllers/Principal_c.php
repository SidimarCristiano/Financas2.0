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

       	  // $despUsuario=$this->Despesas_m->get($usuario['id']);
          // $despUsuario=$despUsuario->result_array();//convertendo pra array.
         
          // $this->dados['despesas']=$despUsuario;

          //  //carrega receitas de usuario
       	  // $receitaUsuario=$this->Receitas_m->get($usuario['id']);
          // $receitaUsuario=$receitaUsuario->result_array();//convertendo pra array.
          // $this->dados['receitas']=$receitaUsuario;


         //carrega extrato de usuario
          // $extraUsuario= $this->Extrato_m->carregarDados($usuario['id']);
          // echo "testet teste";
          // print_r($extraUsuario);
          
           //$extraUsuario=$extraUsuario->result_array();
           // $this->dados['extratos']=$extraUsuario;
       	  $extraUsuario=$this->Extrato_m->get($usuario['id']);
          $extraUsuario=$extraUsuario->result_array();//convertendo pra array.
          $this->dados['extratos']=$extraUsuario;

          //$this->getValor($usuario['id']);
          $this->load->view('Principal_v', $this->dados);



	}
//     public function getValor($id_usuario=null){
//                $receitas = $this->Receitas_m->getSaldo($id_usuario);

//                var_dump($receitas->result_array());
//                die();
// }

}


  ?>