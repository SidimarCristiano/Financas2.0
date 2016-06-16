<?php  

	

/**
 * Created by PhpStorm.
 * User: Sidimar
 * Date: 30/05/2016
 * Time: 19:40
 */
class Extrato_m extends CI_Model
{   
    
    
    //carregando tabelas
    // public function get($idUsuario = null){
    //    // $db = Database::connect();

       
    //     if ($idUsuario) {
    //         $this->db->where('id_usuario', $idUsuario);
    //         $this->db->order_by("id", 'desc');
    //         $this->db->get('despesas');
    //         $this->db->get('receitas');
    //     }
       
    // }
    public function get($idUsuario = null)
	{
    $this->db->select('despesas.data, despesas.descricao, despesas.categoria, despesas.saldo, receitas.data, receitas.descricao, receitas.categoria, despesas.id_usuario, receitas.id_usuario');
   
    $this->db->from('despesas');
    //$this->db->where('id_usuario', $idUsuario);
    $this->db->join('receitas', "despesas.id_usuario = $idUsuario");

    $query = $this->db->get();
    $result = $query->result();
   
    var_dump($result);
 
    die();
    return $result;
}
    //alterando dados de uma linha da tabela
    // public function consultar($id_receita){
    //     if ($id_receita) {
    //         $this->db->where('id_receita', $id_receita);
    //     }
    //     return $this->db->get('receitas');

    // }

    // public function salvar($dados=null){
    //     if($dados['id_usuario']){
    //         $this->db->where('id_usuario',$dados['id_usuario']);
    //     }
    //     $resultado = $this->db->insert('receitas',$dados);
    //     return $resultado;

    // }
    // public function alterar($id_receita, $dados){
    //         $this->db->where('id_receita', $id_receita);
    //         return $this->db->update('receitas',$dados);

    // }

    // public function deletar($idDespesa){

    //     $this->db->where('id_receita', $idDespesa);
    //     return $this->db->delete('receitas');

    // }



}


?>