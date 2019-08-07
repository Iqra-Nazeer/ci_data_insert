<?php defined('BASEPATH') OR exit('No direct script access allowed');

class p_model extends CI_Model{
	public function getProducts($data){
	
			$this->db->insert('product',$data);
			echo "data recorded";
			
	}
}

?>