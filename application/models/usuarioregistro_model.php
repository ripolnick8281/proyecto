<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Usuarioregistro_model extends CI_Model{

public function listarusuario()
{
  

    $query=$this->db->query("select * from vwlistarUsuario;");
    return $query;
    
}

public function agregarusuario($data)
{
    $this->db->insert('usuario',$data);

}

public function recuperarusuario($id)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idUsuario',$id);
		return $this->db->get();
	}

public function modificarusuario($id,$data)
{
    $this->db->where('idUsuario',$id);
    $this->db->update('usuario',$data);

    
}

public function eliminarusuariologico($id,$data)
{
    $this->db->where('idUsuario',$id);
    $this->db->update('usuario',$data);

    
}


}