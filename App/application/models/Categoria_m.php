<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_m extends CI_Model {


	public function salvar($dados = null, $id = null){

		if ($dados){

			if($id){
				$this->db->where('id', $id);

				if($this->db->update("categoria", $dados)){
					return true;
				} else {
					return false;
				}

			} else {

				if ($this->db->insert("categoria", $dados)){
					return true;
				} else {
					return false;
				}
			}

		}

	}//fim do salvar


	public function get($id = null){

		if ($id){
			$this->db->where('id', $id);
		}

		$this->db->order_by("id", 'desc');
		return $this->db->get('categoria');


	}// fim do get
	 public function getCategoria() {
        $data = array();
        $query = $this->db->get('categoria');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }


	public function excluir($id = null){

		if($id){
			return $this->db->where('id', $id)->delete('categoria');
		}
	}//fim do excluir

}
	