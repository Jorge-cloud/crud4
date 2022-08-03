<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripcion_model extends CI_Model {

	
	public function save($data)
	{
		$this->db->query("ALTER TABLE curso AUTO_INCREMENT 1");
		$this->db->insert("capacitaciones",$data);
	}

	public function getCursos(){
		$this->db->select("*");
		$this->db->from("curso");
		
		$results=$this->db->get();
		return $results->result();
	}

	public function delete($id_capacitacion){
		$this->db->where("id_capacitacion",$id_capacitacion);
		$this->db->delete("capacitaciones");
	}
/*
delete from capacitaciones where id_capacitacion=8;
	public function getUsers(){
		$this->db->select("c.id_curso,c.nombre_curso,d.nombre,d.apellido");
		$this->db->from("curso c, docente d");
		$this->db->where("c.id_docente=d.id_docente");
		$results=$this->db->get();
		return $results->result(); 
	}

	public function getUser($id){

		$this->db->select("id_curso,nombre,id_docente");
		$this->db->from("curso");
		$this->db->where("id_curso",$id);
		$results=$this->db->get();
		return $results->row();
	}

	public function update($data,$id){
		$this->db->where("id_curso",$id);
		$this->db->update("curso",$data);
	}

	
*/
}
