<?php

/**
 * Created by PhpStorm.
 * User: Sidimar
 * Date: 30/05/2016
 * Time: 19:40
 */
class Receitas_m extends CI_Model
{   
    
    
    //carregando tabelas
    public function getSaldo($idUsuario=null){
         if ($idUsuario) {
            $this->db->select('saldo');
            $this->db->where('id_usuario', $idUsuario);
           
        }
       // $this->db->where('tipo', "receita");
        $this->db->order_by("data", 'desc');
        return $this->db->get('extrato');
    }
    public function get($idUsuario = null){
       // $db = Database::connect();

       
        if ($idUsuario) {
            $this->db->where('id_usuario', $idUsuario);
        }
        $this->db->order_by("id_receita", 'desc');
        return $this->db->get('receitas');
        
       
    }
    
    public function consultar($id_receita){
        if ($id_receita) {
            $this->db->where('id_receita', $id_receita);
        }
        return $this->db->get('receitas');

    }

    public function salvar($dados=null){
        if($dados['id_usuario']){
            
            $this->db->where('id_usuario',$dados['id_usuario']);
        }
        $resultado = $this->db->insert('extrato',$dados);
        return $resultado;

    }
    //alterando dados de uma linha da tabela
    public function alterar($id_receita, $dados){
            $this->db->where('id_receita', $id_receita);
            return $this->db->update('extrato',$dados);

    }

    public function deletar($idDespesa){

        $this->db->where('id_receita', $idDespesa);
        return $this->db->delete('receitas');

    }



}