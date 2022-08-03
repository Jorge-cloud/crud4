<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Curso_modelo');
		$this->load->model('Docente_model');
	}

	public function index()

	{
		$data = array("data"=>$this->Docente_model->getUsers());
		$this->load->view('header');
		$this->load->view('cursos/add',$data);
	}


	public function save(){

		$nombre_curso = $this->input->post("nombre_curso");

		$id_docente = $this->input->post("id_docente");

		

		$data = array(
			"nombre_curso" => $nombre_curso,
			"id_docente" => $id_docente
			
		);

		$this->Curso_modelo->save($data);

		$this->session->set_flashdata('success','Se registraron los datos correctamente');
		
		redirect(base_url()."cursos");
	}
}