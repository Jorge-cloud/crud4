<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->model('Docente_model');
	}




	public function index()
	{

		$data = array("data"=>$this->Docente_model->getUsers());

		$this->load->view('header');
		$this->load->view('docentes/main',$data);

		//print_r($data);
	}

	public function delete($id){
		$this->Docente_model->delete($id);
		$this->session->set_flashdata('success', 'El docente se eliminó correctamente');
		redirect(base_url()."docentes");
	}
}