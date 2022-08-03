<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Participante_model');


	}


	public function index()
	{

		$data = array("data"=>$this->Participante_model->getUsers());
		
		
		$this->load->view('header');
		$this->load->view('participantes/main',$data);

		
	}

	public function participantes_curso($id_curso){

		$data = array("data"=>$this->Participante_model->getParticipantes_curso($id_curso));
		$data['id'] = $id_curso;
		$this->load->view('header');
		$this->load->view('participantes/participantes_curso',$data);

	}

	public function delete($id){
		$this->Participante_model->delete($id);
		$this->session->set_flashdata('success', 'El docente se eliminó correctamente');
		redirect(base_url()."participantes");
	}
}