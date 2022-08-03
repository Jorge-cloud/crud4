<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente_model extends CI_Model {

	
	public function save($data)
	{
		$this->db->query("ALTER TABLE docente AUTO_INCREMENT 1");
		$this->db->insert("docente",$data);
	}

	public function getUsers(){
		$this->db->select("*");
		$this->db->from("docente");

		$results=$this->db->get();
		return $results->result(); 
	}

	public function getUser($id){

		$this->db->select("id_docente,nombre,apellido,correo");
		$this->db->from("docente");
		$this->db->where("id_docente",$id);
		$results=$this->db->get();
		return $results->row();
	}

	public function update($data,$id){
        $this->db->where("id_docente",$id);
        $this->db->update("docente",$data);
    }

    public function delete($id){
        $this->db->where("id_docente",$id);
        $this->db->delete("docente");
    }
}