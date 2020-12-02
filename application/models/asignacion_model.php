<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Asignacion_model extends CI_Model{

public function listarasignacion()
{
   

    $query=$this->db->query("select * from vwRegistroasignacion;");
    return $query;
    
}

public function agregarasignacion($data)
{
    $this->db->insert('asignacion',$data);

}

public function recuperarasignacion($id)
	{
		$this->db->select('*');
		$this->db->from('asignacion');
		$this->db->where('idAsignacion',$id);
		return $this->db->get();
	}

public function modificarasignacion($id,$data)
{
    $this->db->where('idAsignacion',$id);
    $this->db->update('asignacion',$data);

    
}

public function eliminarasignacionlogico($id,$data)
{
    $this->db->where('idAsignacion',$id);
    $this->db->update('asignacion',$data);

    
}


}