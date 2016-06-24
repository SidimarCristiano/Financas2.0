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
            $this->db->where('id', $idDespesa);
        }
        return $this->db->get('extrato');

    }

    public function salvar($dados=null){
     //   $this->db->where('id_usuario',$dados['id_usuario']);
         return $this->db->insert('extrato',$dados);
     
        //$this->db->insert('despesas',$dados);
        //$this->db->update('despesas',$dados);

    }
    public function alterar($idExtrato,$dados){
            $this->db->where('id', $idExtrato);
             return $this->db->update('extrato',$dados);

    }

    public function deletar($idDespesa){

        $this->db->where('id', $idDespesa);
        return $this->db->delete('extrato');

    }



}