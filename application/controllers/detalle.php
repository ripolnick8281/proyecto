<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller {



	public function listardetalle()
	{   $listacliente=$this->detalle_model->listardetalle();
		$data['detalle']=$listacliente;
		$this->load->view('detalle_vista',$data);
		
	

    }

    
    


	
}
