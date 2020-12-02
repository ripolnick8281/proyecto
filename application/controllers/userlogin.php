<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlogin extends CI_Controller {

	
	public function index()
	{
		$data['msg']=$this->uri->segment(3);
		if($this->session->userdata('login'))
		{
			redirect('userlogin/panel','refresh');
		}
		else
		{    $this->load->view('header');
			$this->load->view('login_vista',$data);
			$this->load->view('footer');
		}	

		$data['msg']=$this->uri->segment(3);
		if($this->session->userdata('login'))
		{
			redirect('userlogin/panel','refresh');
		}
		else
		{    $this->load->view('header');
			$this->load->view('login_vista',$data);
			$this->load->view('footer');
		}	
	}

	public function validarusuario()
	{
		$login=$_POST['login'];
		$password=($_POST['password']);
		$consulta=$this->usuario_model->validar($login,$password);

		if($consulta->num_rows()>0)
		{
			foreach ($consulta->result() as $row) 
			{
				$this->session->set_userdata('idusuario',$row->idUsuario);
				$this->session->set_userdata('login',$row->login);
				
				
				redirect('userlogin/panel','refresh');
			}
		}
		else
		{
			redirect('userlogin/index/1','refresh');
		}
	}

	public function panel()
	{
		if($this->session->userdata('login'))
		{ 
		    $this->load->view('header');
			$this->load->view('inicio_vista');
			$this->load->view('footer');
		}
		else
		{
			redirect('userlogin/index/2','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('userlogin/index/3','refresh');
	}


	public function inicio()
	{
		$this->load->view('inicio_vista');
	}

}

