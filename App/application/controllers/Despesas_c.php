<?php
defined('BASEPATH') OR exit('No direct script access allowed');	//pega as informações da interface principal
    


class Despesas_c extends CI_Controller {
        //pega os dados da tabela e trata
  public $dados = array();
  public function __construct(){

        parent::__construct();
        $this->load->library('session');
        $this->load->model("Despesas_m");
         $this->load->model("Extrato_m");
       

        
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
      public function mensagem($resultado = null){
          if($resultado){
                 $variavel['mensagem'] = "Cadastro de receita efetuado com sucesso!";
                  $variavel['local'] = "Principal_c";
                  $this->load->view('Sucesso_v', $variavel);
                }else {
                  $variavel['local'] = "Principal_c";
                  $variavel['mensagem'] = "Erro ao gravar. Tente novamente.";
                  $this->load->view('errors/html/erro_v',$variavel);
                }
    }
    
    public function editar($idExtrato=null)
    {
        $resultado = $this->Despesas_m->consultar($idExtrato);

        $resultado = $resultado->result_array();
        
        $despesas['despesa'] = $resultado['0'];//resultado do banco fica todo na posicao "zero"
        $this->load->model('Categoria_m');

        $despesas['categorias'] = $this->Categoria_m->getCategoria();
        
        $this->load->view('EditarDespesa_v', $despesas );

    }
    public function salvar(){
            $dados['descricao']=$this->input->post('descricao');
            $dados['valor']=$this->input->post('valor');
            $dados['categoria']=$this->input->post('categoria');
            $id=$this->input->post('id');
            //$id_usuario =$this->input->post('id_usuario');
          //  $dados['data'] = date('d/m/Y H:i:s');
            $dados['tipo'] = $this->input->post('tipo');
            // $extrato['id_usuario'] = $this->input->post('idUsuario');
           
          if($this->input->post('idUsuario')!=null){
            $dados['id_usuario'] = $this->input->post('idUsuario');
            // $extrato = $dados;
            // $extrato['tipo'] = 'despesa';
      
            // $this->Extrato_m->salvar($extrato);
            $this->mensagem($this->Despesas_m->salvar($dados));
           //  $this->Extrato_m->salvar($extrato);// Estou salvando na tabela extrato sem relacao de iddespesa e id receita pois ele esta indo como novo.
                 
        }else  {
           //$this->Extrato_m->alterar($id, $extrato);
           $this->mensagem($this->Despesas_m->alterar($id, $dados));
        }
       
    }

    public function excluir($idExtrato=null){
      if($idExtrato){
      
            if($this->Despesas_m->deletar($idExtrato))
            {
              $variavel['mensagem'] = "Registro excluida com sucesso!";
              $variavel['local'] = "Principal_c";
              $this->load->view('Sucesso_v', $variavel);
            }else {
              $variavel['mensagem'] = "Erro ao gravar. Tente novamente.";
              $this->load->view('errors/html/erro_v');
            }
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

    


