<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Participante_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('participantes/add');
	}


	public function save(){

		$nombre = $this->input->post("nombre");

		$apellido = $this->input->post("apellido");

		$correo = $this->input->post("correo");

		$data = array(
			"nombre" => $nombre,
			"apellido" => $apellido,
			"correo" => $correo
		);

		$this->Participante_model->save($data);

		$this->session->set_flashdata('success','Se registraron los datos correctamente');
		
		redirect(base_url()."participantes");
	}
}