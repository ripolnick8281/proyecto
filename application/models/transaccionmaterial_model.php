<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Transaccionmaterial_model extends CI_Model{

    public function recuperarid($nombrematerial)
    {
        $this->db->select('*');
        $this->db->from('materialdeinstalacion');
        $this->db->where('nombre',$nombrematerial );
        $data=$this->db->get();
        return $data->row()->idMaterialDeInstalacion;
      
    }
    public function recuperaridpersona($nombreusuario,$primerApellido)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombres',$nombreusuario );
        $this->db->where('primerApellido',$primerApellido );
        $data=$this->db->get();
        return $data->row()->idUsuario;
      
    }

    public function recuperarunidades($nombrematerial)
    {
        $this->db->select('*');
        $this->db->from('materialdeinstalacion');
        $this->db->where('nombre',$nombrematerial );
        $data=$this->db->get();
        return $data->row()->unidades;

    }

     public function  insertartransaccion($data)
     {

        $this->db->insert('detallematerial',$data);

     }

    public function  updateunidades($idmaterial,$total)
    {
        $this->db->where('idMaterialDeInstalacion',$idmaterial);
        $this->db->update('materialdeinstalacion',$total);


    }

    public function listarmaterial()
{
    /*$this->db->select('*');
    $this->db->from('cliente');
    $this->db->where('estado',1);
    return $this->db->get();
    */

    $query=$this->db->query("select * from vwRegistromaterial;");
    return $query;
    
}
public function listardetalle()
{
    

    $query=$this->db->query("select * from vwDetalleEntrega;");
    return $query;
    
}

public function insertardetalle($data)
{
    
    $this->db->insert('detalleentrega',$data);

   
    
}

public function eliminardetallelogico($id,$data)
{
    $this->db->where('idDetalleEntrega',$id);
    $this->db->update('detalleentrega',$data);

    
}


public function limpiardetallelogico($data)
{
    
    $this->db->update('detalleentrega',$data);

    
}


}