<?php
class personas_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function getPersonas()
    {
        $query=$this->db
            ->select("id,nombre,correo,telefono as tel,fecha")
            ->from("personas")
            ->order_by("id","desc")
            ->get();
        return $query->result();
    }
    public function getPersonas2()
    {
        $query=$this->db
            ->select("id,nombre,correo,telefono as tel,fecha")
            ->from("personas")
            ->order_by("id","desc")
            ->get();
        return $query->result_array();
    }
    public function getPersonasPorId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
            ->select("id,nombre,correo,telefono as tel,fecha")
            ->from("personas")
            ->where($where)
            ->get();
        echo $this->db->last_query();//imprime la query
        return $query->row();
    }
    public function getPersonasConDireccion()
    {
        //consulta a dos tablas
        $query=$this->db
            ->select("p.id as id_persona,p.nombre,p.correo,p.telefono,p.fecha,d.calle,d.direccion,d.ciudad")
            ->from("personas as p")
            ->join("direccion_persona as d","p.id=d.id_persona","inner")
            ->get();
        return $query->result();
    }
    public function insertar_persona($datos=array())
    {
        $this->db->insert("personas",$datos);
        //ahora insertamos en la tabla direccion_persona
        $arreglo=array
        (
            "id_persona"=>$this->db->insert_id(),
            "calle"=>"calle del amor",
            "direccion"=>"villa villa",
            "ciudad"=>"valdivia"
        );
        $this->db->insert("direccion_persona",$arreglo);
    }
    public function modificar_persona($datos=array(),$arreglo=array(),$id)
    {
        $this->db->where('id',$id);
        $this->db->update('personas',$datos);

        $this->db->where('id_persona',$id);
        $this->db->update('direccion_persona',$arreglo);
    }
    public function eliminar($id)
    {
        $this->db->delete("personas",array("id"=>$id));
        $this->db->delete("direccion_persona",array("id_persona"=>$id));
    }
}