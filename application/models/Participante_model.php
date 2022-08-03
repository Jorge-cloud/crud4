<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participante_model extends CI_Model {

	public function save($data)
	{
		$this->db->query("ALTER TABLE docente AUTO_INCREMENT 1");
		$this->db->insert("participante",$data);
	}
	
	
//lista todos los participantes
	public function getUsers(){
		$this->db->select("*");
		$this->db->from("participante");

		$results=$this->db->get();
		return $results->result(); 
	}

//lista solo un registro igual al $id

	public function getUser($id_participante){

		$this->db->select("id_participante,nombre,apellido,correo");
		$this->db->from("participante");
		$this->db->where("id_participante",$id_participante);
		$results=$this->db->get();
		return $results->row();
	}

	public function getParticipantes_curso($id_curso){
		$this->db->select("ca.id_capacitacion,p.id_participante,p.nombre, p.apellido, curso.nombre_curso,p.correo,ca.id_curso");
		$this->db->from("capacitaciones ca");

		$this->db->join("participante p " , " ca.id_participante = p.id_participante");
		$this->db->join("curso"," ca.id_curso = curso.id_curso");
		$this->db->where("curso.id_curso",$id_curso);

		$results=$this->db->get();
		//var_dump($results->result());
		return $results->result(); 
	}






	// actualiza los datos recibiendo un arrar y un id desde 
	//la vista participantes/edit ..

	public function update($data,$id_participante){
		$this->db->where("id_participante",$id_participante);
		$this->db->update("participante",$data);
	}
	public function delete($id){

		$this->db->where("id_participante",$id);
		$this->db->delete("participante");
	}


	
}
