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
}