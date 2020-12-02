<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Cliente_model extends CI_Model{

public function listarcliente()
{
    
    $query=$this->db->query("select * from vwRegistroCliente;");
    return $query;
    
}

public function agregarcliente($data)
{
    $this->db->insert('cliente',$data);

}

public function recuperarcliente($id)
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('idCliente',$id);
		return $this->db->get();
	}

public function modificarcliente($id,$data)
{
    $this->db->where('idCliente',$id);
    $this->db->update('cliente',$data);

    
}

public function eliminarclientelogico($id,$data)
{
    $this->db->where('idCliente',$id);
    $this->db->update('cliente',$data);

    
}


}