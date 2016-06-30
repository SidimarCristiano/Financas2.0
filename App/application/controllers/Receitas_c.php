<?php
defined('BASEPATH') OR exit('No direct script access allowed');	//pega as informações da interface principal
    


class Receitas_c extends CI_Controller {
        //pega os dados da tabela e trata
  public $dados = array();

  public function __construct(){

        parent::__construct();
        $this->load->library('session');
        $this->load->model("Receitas_m");
        $this->load->model("Despesas_m");
        $this->load->model("Categoria_m");


        
    }

// public function getValor($id_usuario){
//    $receitas['saldo'] = $this->Receitas_m->getSaldo($id_usuario);

//    print_r($receitas);
//    die();
// }
    
    public function editar($idReceita=null){
        
        $resultado = $this->Receitas_m->consultar($idReceita);

        $resultado = $resultado->result_array();

        $receitas['receita'] = $resultado['0'];//resultado do banco fica todo na posicao "zero"
       

        $receitas['categorias'] = $this->Categoria_m->getCategoria();
        
        $this->load->view('EditarReceita_v', $receitas);

    }
    public function mensagem($resultado = null){
          if($resultado){
                 $variavel['mensagem'] = "Cadastro de receita efetuado com sucesso!";
                  $variavel['local'] = "Principal_c";
                  $this->load->view('Sucesso_v', $variavel);
                }else {
                  $variavel['mensagem'] = "Erro ao gravar. Tente novamente.";
                  $this->load->view('errors/html/erro_v',$variavel);
                }
    }

    public function salvar(){
            $dados['descricao']=$this->input->post('descricao');
            $dados['valor']=$this->input->post('valor');
            $dados['categoria']=$this->input->post('categoria');
            $id=  $this->input->post('id_receita');
           
           // $id_usuario =$this->input->post('id_usuario');
           
            $dados['tipo'] = $this->input->post('tipo');
          
        if($this->input->post('idUsuario')!=null){
            $dados['id_usuario'] = $this->input->post('idUsuario');
             $saldo= $this->Receitas_m->getSaldo($dados['id_usuario']);
            $saldo = $saldo->result_array();
           
            $dados['saldo'] = ($saldo['0']['saldo']) + $dados['valor'];
           // $this->Extrato_m->salvar($extrato); 
            $this->mensagem($this->Receitas_m->salvar($dados));
                 
        }else  {
           $this->Extrato_m->alterar($id, $extrato);
           $this->mensagem($this->Receitas_m->alterar($id, $dados));
        }
          
              
         
    }
  

    public function excluir($idReceita=null){
        if($idReceita){
             
            if($this->Receitas_m->deletar($idReceita) && $this->Extrato_m->deletar($idReceita, "receita"))
            {
              $variavel['mensagem'] = "Receita excluida com sucesso!";
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
           $receitas['id'] = $idUsuario['id'];
           $receitas['usuario'] = $idUsuario['user'];
          $receitas['categorias'] = $this->Categoria_m->getCategoria();
         $this->load->view('Receitas_v', $receitas );

   }
}

    


