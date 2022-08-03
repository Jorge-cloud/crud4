<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Participante_model');
	}

	public function index($id_participante)
	{
		$data=$this->Participante_model->getUser($id_participante);

		$this->load->view('header');
		$this->load->view('participantes/edit',$data);
		
	}


	public function update($id_participante){

		$nombre = $this->input->post("nombre");

		$apellido = $this->input->post("apellido");

		$correo = $this->input->post("correo");

		$data = array(
			"nombre" => $nombre,
			"apellido" => $apellido,
			"correo" => $correo
		);

		$this->Participante_model->update($data,$id_participante);

		$this->session->set_flashdata('success','Se editaron los datos correctamente');
		
		redirect(base_url()."participantes");
	}
}