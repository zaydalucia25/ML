<?php
	class MdCarrito extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		public function AñadirCarrito($id){
			$this->db->select("*");
			$this->db->from('productos');
			$this->db->where('id', $id);
			// Retornar resultados
			return $this->db->get()->result();
		}	
		
	}
?>