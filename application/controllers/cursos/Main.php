<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('Curso_modelo');
	}




	public function index()
	{

		$data = array("data"=>$this->Curso_modelo->getUsers());
		
		$this->load->view('header');

		$this->load->view('cursos/main',$data);

		//print_r($data);
	}

	public function delete($id){
		$this->Curso_modelo->delete($id);
		$this->session->set_flashdata('success', 'El curso se eliminó correctamente');
		redirect(base_url()."curso");
	}
}