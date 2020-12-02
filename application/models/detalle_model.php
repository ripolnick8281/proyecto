<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Detalle_model extends CI_Model{

public function listardetalle()
{
    /*$this->db->select('*');
    $this->db->from('cliente');
    $this->db->where('estado',1);
    return $this->db->get();
    */

    $query=$this->db->query("select * from vwRegistrodetalle;");
    return $query;
    
}




}