<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {



	public function listarcliente()
	{   $listacliente=$this->cliente_model->listarcliente();
		$data['cliente']=$listacliente;
		$this->load->view('listarcliente_vista',$data);
		
	

    }

    public function registrarcliente()
	{
		$this->load->view('registrarcliente_vista');
    }
    
    public function registrarclientebd() 
	{ 
        $data['nombres']=$_POST['nombrecliente'];
        $data['primerApellido']=$_POST['primerapellido'];
		$data['segundoApellido']=$_POST['segundoapellido'];
		$data['ci']=$_POST['ci'];
		$data['telefono']=$_POST['telefono'];
		$data['direccion']=$_POST['direccion'];
        $data['idUsuario']=$this->session->userdata('idusuario');
		$this->cliente_model->agregarcliente($data);
		redirect('cliente/listarcliente', 'refresh');
		

    }

    
	public function modificarcliente()
	{
		$id=$_POST['id'];
		$data['infocliente']=$this->cliente_model->recuperarcliente($id);
		$this->load->view('modificarcliente_vista',$data);
	}
    
    public function modificarbd()
	{
		$id=$_POST['id'];
        $nombre=$_POST['nombrecliente'];
        $primerApellido=$_POST['primerapellido'];
        $SegundoApellido=$_POST['segundoapellido'];
		$telefono=$_POST['telefono'];
		$direccion=$_POST['direccion'];
        $idUsuario=$this->session->userdata('idusuario');
		
		$data['nombres']=$nombre;
		$data['primerApellido']=$primerApellido;
        $data['segundoApellido']=$SegundoApellido;
		$data['telefono']=$telefono;
		$data['direccion']=$direccion;
        $data['idUsuario']=$idUsuario;
		
		
		$this->cliente_model->modificarcliente($id,$data);
        redirect('cliente/listarcliente', 'refresh');
	}

	public function eliminarcliente()
	{
		$id=$_POST['id'];
		$data['idCliente']=$id;
		$data['estado']=0;

	    $this->cliente_model->eliminarclientelogico($id,$data);
        redirect('cliente/listarcliente', 'refresh');

	}
    
    


	
}
