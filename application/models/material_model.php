<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Material_model extends CI_Model{

public function listarmaterial()
{
   
    $query=$this->db->query("select * from vwRegistromaterial;");
    return $query;
    
}

public function agregarmaterial($data)
{
    $this->db->insert('materialdeinstalacion',$data);

}

public function recuperarmaterial($id)
	{
		$this->db->select('*');
		$this->db->from('materialdeinstalacion');
		$this->db->where('idMaterialDeInstalacion',$id);
		return $this->db->get();
	}

public function modificarmaterial($id,$data)
{
    $this->db->where('idMaterialDeInstalacion',$id);
    $this->db->update('materialdeinstalacion',$data);

    
}

public function eliminarmateriallogico($id,$data)
{
    $this->db->where('idMaterialDeInstalacion',$id);
    $this->db->update('materialdeinstalacion',$data);

    
}


}