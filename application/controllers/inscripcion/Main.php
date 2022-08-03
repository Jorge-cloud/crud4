<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Inscripcion_model');


	}


	public function index()
	{

		$data = array("data"=>$this->Inscripcion_model->getCursos());
		
		
		$this->load->view('header');
		$this->load->view('inscripciones',$data);

		
	}



	public function delete($id_capacitacion){

		$this->Inscripcion_model->delete($id_capacitacion);
		$this->session->set_flashdata('success', 'El participante se eliminó correctamente');
		var_dump($_REQUEST);
		redirect(base_url()."cursos/participantes/".$_REQUEST["id_curso"]);


	}
}