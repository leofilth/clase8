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
}