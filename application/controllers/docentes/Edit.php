<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Docente_model');
	}

	public function index($id)
	{
		$data=$this->Docente_model->getUser($id);

		$this->load->view('header');
		$this->load->view('docentes/edit',$data);
		
	}


	public function update($id){

		$nombre = $this->input->post("nombre");

		$apellido = $this->input->post("apellido");

		$correo = $this->input->post("correo");

		$data = array(
			"nombre" => $nombre,
			"apellido" => $apellido,
			"correo" => $correo
		);

		$this->Docente_model->update($data,$id);

		$this->session->set_flashdata('success','Se editaron los datos correctamente');
		
		redirect(base_url()."docentes");
	}
}