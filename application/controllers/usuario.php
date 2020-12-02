<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {



	public function listarusuario()
	{   $listausuario=$this->usuarioregistro_model->listarusuario();
		$data['usuario']=$listausuario;
		
		$this->load->view('listarusuario_vista',$data);
		
	

    }

    public function registrarusuario()
	{
		$this->load->view('registrarusuario_vista');
    }
    
    public function registrarusuariobd() 
	{ 
		$data['nombres']=$_POST['nombreusuario'];
		$data['primerApellido']=$_POST['primerapellido'];
		$data['segundoApellido']=$_POST['segundoapellido'];
		$data['ci']=$_POST['ci'];
		$data['sexo']=$_POST['sexo'];
		$data['telefono']=$_POST['telefono'];
		$data['fechaNacimiento']=$_POST['fechanacimiento'];
		$data['login']=$_POST['login'];
		$data['password']=$_POST['password'];
        $data['tipoUsuario']=$_POST['tipousuario'];
		$this->usuarioregistro_model->agregarusuario($data);
		redirect('usuario/listarusuario', 'refresh');
		

    }

    
	public function modificarusuario()
	{
		$id=$_POST['id'];
		$data['infousuario']=$this->usuarioregistro_model->recuperarusuario($id);
		$this->load->view('modificarusuario_vista',$data);
	}
    
    public function modificarbd()
	{
		$id=$_POST['id'];
        $nombre=$_POST['nombreusuario'];
        $primerApellido=$_POST['primerapellido'];
        $segundoApellido=$_POST['segundoapellido'];
		$ci=$_POST['ci'];
		$sexo=$_POST['sexo'];
		$telefono=$_POST['telefono'];
		$fechaNacimiento=$_POST['fechanacimiento'];
		$login=$_POST['login'];
		$tipoUsuario=$_POST['tipousuario'];
		$password=$_POST['password'];
        
        
		
		$data['nombres']=$nombre;
		$data['primerApellido']=$primerApellido;
		$data['segundoApellido']=$segundoApellido;
		$data['ci']=$ci;
		$data['sexo']=$sexo;
		$data['telefono']=$telefono;
		$data['fechaNacimiento']=$fechaNacimiento;
		$data['login']=$login;
		$data['tipoUsuario']=$tipoUsuario;
		$data['password']=$password;

		
		
	
		
		$this->usuarioregistro_model->modificarusuario($id,$data);
	     redirect('usuario/listarusuario', 'refresh');
	
	}

	public function eliminarusuario()
	{
		$id=$_POST['id'];
		$data['idUsuario']=$id;
		$data['estado']=0;

	    $this->usuarioregistro_model->eliminarusuariologico($id,$data);
        redirect('usuario/listarusuario', 'refresh');

	}
    
    


	
}
