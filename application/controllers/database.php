<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBase extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template');
        //$this->load->model('personas_model');//modelo disponible solo para esta clase
    }

    public function index()
    {
        //$this->load->model('personas_model');//modelo disponible solo para este metodo
        $datos=$this->personas_model->getPersonas();
        $this->layout->view('database',compact("datos"));
    }
    public function usando_result_array()
    {
        //$this->load->model('personas_model');//modelo disponible solo para este metodo
        $datos=$this->personas_model->getPersonas2();
        $this->layout->view('usando_result_array',compact("datos"));
    }
    public function usando_where($id=null)
    {
        //$this->load->model('personas_model');//modelo disponible solo para este metodo
        $datos=$this->personas_model->getPersonasPorId($id);
        $this->layout->view('usando_where',compact("datos"));
    }
    public function usando_join()
    {
        $datos=$this->personas_model->getPersonasConDireccion();
    $this->layout->view("usando_join",compact("datos"));
    }
    public function insertar()
    {
        $datos=array
        (
            "nombre"=>"Pedro Ñandú",
            "correo"=>"pedro@gamil.com",
            "telefono"=>"959595",
            "fecha"=>date("y-m-d h:m:s")
        );
        $this->personas_model->insertar_persona($datos);
        $this->layout->view("insertar");
    }
    public function modificar()
    {
        $datos=array
        (
            "nombre"=>"Pedro Ñandú LaLa",
            "correo"=>"pedro@gamil.com",
            "telefono"=>"11111111"
        );
        $arreglo=array
        (
            "calle"=>"calle del odio",
            "direccion"=>"villa villa",
            "ciudad"=>"temuco"
        );
        $this->personas_model->modificar_persona($datos,$arreglo,"5");
        $this->layout->view("update");
    }
    public function eliminar()
    {
        $this->personas_model->eliminar("5");
        $this->layout->view("eliminar");
    }
}