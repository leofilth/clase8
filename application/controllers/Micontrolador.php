<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiControlador extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->layout->setLayout('template');
	}
	public function index($id=null,$id2=null)
	{
		//$this->load->view('welcome_message');
		//$this->load->view('mivista');
		$this->layout->view('vista_index',compact("id","id2"));
	}

	/**
	 *
	 */
	public function nosotros()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('mivista');
		//$this->layout->setLayout('template2');//se establece nuevo layout para esta vista
		$this->layout->setTitle('nosotros page');
		$this->layout->setKeywords('mas keywords');
		$this->layout->setDescripcion('metadescripcion');
		//llamamos a una librería js
		$this->layout->js(array(base_url()."public/js/libreria.js"));
		//llamamos a una librería css
		$this->layout->css(array(base_url()."public/css/estilos2.css"));
		$saludo="hola saludando ando coriendo desnudo por la casa";
		$this->layout->view('nosotros',compact('saludo'));
	}
	public function otro()
	{
		$this->layout->view('vista_otro');
	}
	public function saludo($id=null,$id2=null)//si pone null es opcional, sino obligatorio, mostrara error
	{
		$id=$this->uri->segment(3);//obtiene valores por url utilizando uri->segement(numero)donde numero es el valor
		// en la url
		$id2=$this->uri->segment(2);
		$uri_string=$this->uri->uri_string();
		$this->layout->view('saludo',compact("id","id2","uri_string"));
	}
	public function fechas()
	{
		$this->load->helper('funciones');
		$this->load->helper('date');
		$fechaHoy=now();
		$datestring="Año:%Y Mes:%m Dia:%d - %h:%i:%a";
		$time=time();
		$fecha_string=mdate($datestring,$time);
		//$saludo=saludo();
		$this->layout->view("vista_fecha",compact("fechaHoy","fecha_string"));
	}
}