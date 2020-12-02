<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asignacion extends CI_Controller {



	public function listarasignacion()
	{   $listaasignacion=$this->asignacion_model->listarasignacion();
		$data['asignacion']=$listaasignacion;
		$this->load->view('listarasignacion_vista',$data);
		
	

    }

    public function registrarasignacion()
	{
		$this->load->view('registrarasignacion_vista');
    }
    
    public function registrarasignacionbd() 
	{ 
		$data['provincia']=$_POST['provincia'];
		$data['descripcion']=$_POST['descripcion'];
        $data['idUsuario']=$this->session->userdata('idusuario');
		$this->asignacion_model->agregarasignacion($data);
		redirect('asignacion/listarasignacion', 'refresh');
		

    }

    
	public function modificarasignacion()
	{
		$id=$_POST['id'];
		$data['infoasignacion']=$this->asignacion_model->recuperarasignacion($id);
		$this->load->view('modificarasignacion_vista',$data);
	}
    
    public function modificarasignacionbd()
	{
		$id=$_POST['id'];
		$provincia=$_POST['provincia'];
		$descripcion=$_POST['descripcion'];
      
        $idUsuario=$this->session->userdata('idusuario');
		
		$data['provincia']=$provincia;
		$data['descripcion']=$descripcion;
        
		
		
		$this->asignacion_model->modificarasignacion($id,$data);
        redirect('asignacion/listarasignacion', 'refresh');
	}

	public function eliminarasignacion()
	{
		$id=$_POST['id'];
		$data['idAsignacion']=$id;
		$data['estado']=0;

	    $this->asignacion_model->eliminarasignacionlogico($id,$data);
        redirect('asignacion/listarasignacion', 'refresh');

	}
    
    


	
}
