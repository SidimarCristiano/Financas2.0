<?php
defined('BASEPATH') OR exit('No direct script access allowed');	//pega as informações da interface principal
    


class Despesas_c extends CI_Controller {
        //pega os dados da tabela e trata
  public $dados = array();
  public function __construct(){

        parent::__construct();
        $this->load->library('session');
        $this->load->model("Despesas_m");
       

        
    }

    public function index($idUsuario=null){
        //  $this->load->model("Rendimentos_m");
       //   $usuario = $this->session->userdata('usuario');

       //  //$usuario=$this->Rendimentos_m->get($usuario->id);

       //  $this->dados['usuario'] = $usuario;
   
       

       //  $despUsuario=$this->Despesas_m->get($usuario['id']);
     
        
       //  $despUsuario=$despUsuario->result_array();//convertendo pra array.
     
       // $this->dados['despesas']=$despUsuario;
       //  $this->load->view('Principal_v', $this->dados);
        
    }
    
    public function editar($idDespesa=null)
    {
        $resultado = $this->Despesas_m->consultar($idDespesa);

        $resultado = $resultado->result_array();
        
        $despesas['despesa'] = $resultado['0'];//resultado do banco fica todo na posicao "zero"
        $this->load->model('Categoria_m');

        $despesas['categorias'] = $this->Categoria_m->getCategoria();
        
        $this->load->view('EditarDespesa_v', $despesas );

    }
    public function salvar(){
        if($this->input->post('idUsuario')){
            $dados['id_usuario'] = $this->input->post('idUsuario');
            $dados['descricao']=$this->input->post('descricao');
            $dados['valor']=$this->input->post('valor');
            $dados['categoria']=$this->input->post('categoria');
            $this->Despesas_m->salvar($dados);
        }else
        {
           $dados['descricao']=$this->input->post('descricao');
            $dados['valor']=$this->input->post('valor');
            $dados['categoria']=$this->input->post('categoria');
            $this->Despesas_m->alterar($dados);
        }
       
    }

    public function excluir($idDespesa=null){
        if($idDespesa){
          $this->Despesas_m->deletar($idDespesa);
        }else{
            echo "algo deu errado com o id";
        }
    }
		
   public function adcionar(){
           $this->load->model('Categoria_m');
           $idUsuario = $this->session->userdata('usuario');
           $despesas['id'] = $idUsuario['id'];
           $despesas['usuario'] = $idUsuario['user'];
          $despesas['categorias'] = $this->Categoria_m->getCategoria();
         $this->load->view('Despesas_v', $despesas );

   }
}

    


