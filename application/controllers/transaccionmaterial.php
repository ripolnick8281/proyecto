<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaccionmaterial extends CI_Controller {

	
	public function index()
	 {   $listardetalle=$this->transaccionmaterial_model->listardetalle();
		   $data['detalle']=$listardetalle;
	    
		
		$this->load->view('transaccionmaterial_vista',$data);
    }
    
    public function agregarDetalle()
    {
        $nombreusuario=$_POST['nombre'];
        $primerApellido=$_POST['primerapellido'];
        $nombrematerial=$_POST['nombrematerial'];
        $medida=$_POST['medida'];
        $cantidad=$_POST['unidades'];

  
        
        $idmaterial=$this->transaccionmaterial_model->recuperarid($nombrematerial);
        $idUsuario=$this->transaccionmaterial_model->recuperaridpersona($nombreusuario,$primerApellido);

        $data['idMaterialDeInstalacion']= $idmaterial;
        $data['unidades']=$cantidad;
        $data['idUsuario']=$idUsuario;
        

        $this->transaccionmaterial_model->insertardetalle($data);
     
       

      redirect('transaccionmaterial/index', 'refresh');
    }

   public function getid()
    {
    
        $nombrematerial=$_POST['nombrematerial'];
        $cantidad=$_POST['unidadmaterial'];
        
        $idUsuario=$this->session->userdata('idusuario');
        $idmaterial=$this->transaccionmaterial_model->recuperarid($nombrematerial);
        

        $data['idMaterialDeInstalacion']= $idmaterial;
        $data['cantidad']=$cantidad;
        $data['idUsuario']=$idUsuario;

        $this->transaccionmaterial_model->insertartransaccion($data);
     
        $unidades=$this->transaccionmaterial_model->recuperarunidades($nombrematerial);
        $total['unidades']=$unidades-$cantidad;

      $this->transaccionmaterial_model->updateunidades($idmaterial,$total);
      redirect('transaccionmaterial/index', 'refresh');
    }
    public function getid2()
    {
    
        $nombrematerial=$_POST['nombrematerial'];
        $cantidad=$_POST['unidadmaterial'];
        
        $idUsuario=$this->session->userdata('idusuario');
        $idmaterial=$this->transaccionmaterial_model->recuperarid($nombrematerial);
        

        $data['idMaterialDeInstalacion']= $idmaterial;
        $data['cantidad']=$cantidad;
        $data['idUsuario']=$idUsuario;

        $this->transaccionmaterial_model->insertartransaccion($data);
     
        $unidades=$this->transaccionmaterial_model->recuperarunidades($nombrematerial);
        $total['unidades']=$unidades+$cantidad;

      $this->transaccionmaterial_model->updateunidades($idmaterial,$total);


       
      redirect('transaccionmaterial/index', 'refresh');
    }
    

    public function eliminardetalle()
    {  
      $id=$_POST['id'];
      $data['idDetalleEntrega']=$id;
      $data['estado']=0;
      
  
        $this->transaccionmaterial_model->eliminardetallelogico($id,$data);
        redirect('transaccionmaterial/index', 'refresh');
     }


     public function limpiardetalle()
     {  
       $valor=$_POST['limpiar'];
       $data['estado']=$valor;
       
   
         $this->transaccionmaterial_model->limpiardetallelogico($data);
         redirect('transaccionmaterial/index', 'refresh');
      }
}