<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();		
	}

	public function salvarEmail($data)
	{
		$this->db->insert('correios', array(
			'correo'  => $data['email'],
			'asunto'  => $data['option'],
			'mensaje' => $data['msg'],
			'nombre'  => $data['name']));
	}

	
}
