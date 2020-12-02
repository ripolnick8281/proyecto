<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Entregado_model extends CI_Model{


public function listardetalle($nombre)
{
    

    $query=$this->db->query(" select  d.idDetalleEntrega, concat(u.nombres,' ', u.primerApellido) as 'Nombrecompleto', u.ci, d.unidades,m.nombre,d.fechaEntrega
    from detalleentrega d 
    inner join usuario u on u.idUsuario=d.idUsuario
    inner join materialdeinstalacion m on m.idMaterialDeInstalacion=d.idMaterialDeInstalacion
    where u.nombres='".$nombre."' and d.estado=1");
    return $query;
    
}


}