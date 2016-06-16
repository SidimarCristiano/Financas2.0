<?php
//aqui terá os metodos salvar, editar, excluir

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_c extends CI_Controller{

	public function carregar(){
		$this->load->model('Categoria_m');
		$c['categorias'] = $this->Categoria_m->get();
		$this->load->view('Categoria_v', $c);
	}

	public function salvar(){
		$this->load->library('form_validation');


		$regra = array(
				array(
					'field' => 'descricao',
					'label' => 'Descricao',
					'rules' => 'required'
					),

				array(
					'field' => 'tipo',
					'label' => 'Tipo',
					'rules' => 'required'
					)

			);

		$this->form_validation->set_rules($regra);

		if ($this->form_validation->run() == FALSE){
			$variaveis['titulo'] = 'Novo Registro';
			$this->load->view('CategoriaForm_v', $variaveis);
		} else {

			$id = $this->input->post('id');

			$dados = array(
				"descricao" => $this->input->post('descricao'),
				"tipo" => $this->input->post('tipo')

				);
			
			$this->load->model('Categoria_m');

			if($this->Categoria_m->salvar($dados, $id)){

				$variaveis['mensagem'] = "Registro gravado com sucesso!";
				$this->load->view('Sucesso_v', $variaveis);

			} else {
				$variaveis['mensagem'] = "Falha ao gravar registro!";
				$this->load->view('errors/html/erro_v', $variaveis);


			}
		}

	}//fim do salvar


	public function editar($id = null){

		if($id){
			$this->load->model('Categoria_m');
			$categoria = $this->Categoria_m->get($id);

			if($categoria->num_rows() > 0 ){
				$variaveis['titulo'] = 'Editar uma categoria:';
				$variaveis['id'] = $categoria->row()->id;
				$variaveis['descricao'] = $categoria->row()->descricao;
				$variaveis['tipo'] = $categoria->row()->tipo;

				$this->load->view('CategoriaForm_v', $variaveis);

			} else {
				$variaveis['mensagem'] = "Registro não encontrado.";
				$this->load->view('errors/html/erro_v', $variaveis);
			}

		}

	} //fim do ditar


	public function excluir($id = null){

		$this->load->model('Categoria_m');
		if($this->Categoria_m->excluir($id)){
			$variaveis['mensagem'] = "Registro excluído com sucesso!";
			$this->load->view('Sucesso_v', $variaveis);

		} else {
			$variaveis['mensagem'] = "Registro não encontrado.";
				$this->load->view('errors/html/erro_v', $variaveis);
		}

	}//fim do excluir

	public function novo()
	{
		$variaveis['titulo'] = 'Nova Categoria';
		$this->load->view('CategoriaForm_v', $variaveis);
	}

	public function Categoria_combobox(){
     // retrieve the album and add to the data array
        $this->load->model('categoria_m');
        $data['categorias'] = $this->combobox_model->getalCategoria();
       return $data;
   }
}