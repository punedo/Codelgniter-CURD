<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpModel extends CI_Model
{
    public function insertEmp($data)
    {
		return $this->db->insert('users',$data);
	}

	public function getEmp(){
      $data=$this->db->get('users');
	  return $data->result();
	}

	public function editEmp($id){
       $query=$this->db->get_where('users',['id'=> $id]);
	  return $query->row();
	}
	public function updateEmp($data,$id){
	return	$this->db->update('users',$data,['id'=>$id]);
	}


	public function deleteEmp($id){
	return	$this->db->delete('users', ['id' => $id]);
	}
}
