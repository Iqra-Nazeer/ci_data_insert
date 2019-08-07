<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//add products
	public function add_products()
	{
		 
		$this->load->model('p_model');
		 
		 if($this->input->post('submit')){
			$name=$this->input->post('name');
			$data['name']=$this->input->post('name');
			$data['price']=$this->input->post('price');
			
			$data['descp']=$this->input->post('descp');
			$this->p_model->getProducts($data);

		}
		else{
			$this->load->view('products');
		}
		
	
		
	}
}
?>
