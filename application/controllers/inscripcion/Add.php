<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Inscripcion_model');
		$this->load->model('Participante_model');
	}

	public function index($id_curso)
	{
		$data =array('id_curso' => $id_curso );
		$this->load->view('header');
		$this->load->view('inscripciones',$data);
	}


	public function save(){

		
			
		$id_participante = $this->input->post("id_participante");
		$id_curso = $this->input->post("id_curso");
		
		$data = array(
			"id_participante" => $id_participante,
			"id_curso" => $id_curso
			
		);
		
		$this->Inscripcion_model->save($data);

		$this->session->set_flashdata('success','La inscripcion se realizo correctamente');
		
		redirect(base_url()."inscripcion");
	}
}