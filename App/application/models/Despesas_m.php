<?php

/**
 * Created by PhpStorm.
 * User: Sidimar
 * Date: 30/05/2016
 * Time: 19:40
 */
class Despesas_m extends CI_Model
{   
    
    
    //carregando tabelas
    public function get($idUsuario = null){
       // $db = Database::connect();
        if ($idUsuario) {
            $this->db->where('id_usuario', $idUsuario);
            $this->db->order_by("id_despesa", 'desc');
        return $this->db->get('despesas');
        }
       
    }
    //alterando dados de uma linha da tabela
    public function consultar($idDespesa){
        if ($idDespesa) {
            $this->db->where('id_despesa', $idDespesa);
        }
        return $this->db->get('despesas');

    }

    public function salvar($dados=null){
        $this->db->where('id_usuario',$dados['id_usuario']);
        $this->db->insert('despesas',$dados);
     
        $this->db->insert('extrato',$dados);
        //$this->db->update('despesas',$dados);

    }
    public function alterar($idDespesa){
            $this->db->where('id_despesa', $idDespesa);
            
             return $this->db->update('despesas',$dados);

    }

    public function deletar($idDespesa){

        $this->db->where('id_despesa', $idDespesa);
        return $this->db->delete('despesas');

    }



}