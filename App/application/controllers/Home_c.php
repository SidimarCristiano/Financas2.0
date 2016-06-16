<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* Controller: Responsável por carregar a view
	*/
	class Home_c extends CI_Controller
	{
		function index()//função padrão, caso nenhuma outra seja chamada
		{
			//$varialve['cadastro'] = $this->LoginCadastro_m->get();
			$this->load->view('Home_v.php');
		}

	}
 ?>