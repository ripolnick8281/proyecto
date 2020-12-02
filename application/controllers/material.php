<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {



	public function listarmaterial()
	{   $listamaterial=$this->material_model->listarmaterial();
		$data['material']=$listamaterial;
		$this->load->view('listarmaterial_vista',$data);
		
    }

    public function registrarmaterial()
	{
		$this->load->view('registrarmaterial_vista');
    }
    
    public function registrarmaterialbd() 
	{ 
		$data['nombre']=$_POST['nombrematerial'];
		$data['medida']=$_POST['medida'];
        $data['descripcion']=$_POST['descripcion'];
        $data['unidades']=$_POST['unidades'];
        $data['idUsuario']=$this->session->userdata('idusuario');
		$this->material_model->agregarmaterial($data);
		redirect('material/listarmaterial', 'refresh');
		

    }

    
	public function modificarmaterial()
	{
		$id=$_POST['id'];
		$data['infomaterial']=$this->material_model->recuperarmaterial($id);
		$this->load->view('modificarmaterial_vista',$data);
	}
    
    public function modificarmaterialbd()
	{
		$id=$_POST['id'];
        $nombre=$_POST['nombrematerial'];
        $medida=$_POST['medida'];
        $descripcion=$_POST['descripcion'];
		$unidades=$_POST['unidades'];
        $idUsuario=$this->session->userdata('idusuario');
		
		$data['nombre']=$nombre;
		$data['medida']=$medida;
        $data['descripcion']=$descripcion;
		$data['unidades']=$unidades;
        $data['idUsuario']=$idUsuario;
		
		
		$this->material_model->modificarmaterial($id,$data);
        redirect('material/listarmaterial', 'refresh');
	}

	public function eliminarmaterial()
	{
		$id=$_POST['id'];
		$data['idMaterialDeInstalacion']=$id;
		$data['estado']=0;

	    $this->material_model->eliminarmateriallogico($id,$data);
        redirect('material/listarmaterial', 'refresh');

    }
}
    