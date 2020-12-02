<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entregado extends CI_Controller {

	public function index()
	 {  

        error_reporting(0);
         $nombre=$_POST['nombre'];
        if($nombre=="")
        {
            $nombre="null";
        } 
        else
        {

        }
       
       

        $listardetalle=$this->entregado_model->listardetalle($nombre);
        $data['detalle']=$listardetalle;
           
	    
		
		$this->load->view('reportedeentrega_vista',$data);
    }

    public function listar()
	 {  
        $nombre=$_POST['nombre'];
        $data['nombres']=$nombre;
        $listardetalle=$this->entregado_model->listar();

     }
   



	
}
