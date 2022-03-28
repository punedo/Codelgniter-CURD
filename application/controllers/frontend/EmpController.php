<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpController extends CI_Controller
{
    public function index()
    {

		$this->load->view('frontend/templetes/header');

		$this->load->model('EmpModel');
		$data['emp']=$this->EmpModel->getEmp();
		 $this->load->view('frontend/employee',$data);

		$this->load->view('frontend/templetes/footer');
	}


	public function add(){
		$this->load->view('frontend/templetes/header');
		$this->load->view('frontend/create');

		$this->load->view('frontend/templetes/footer');
	}


	public function store(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first','first','trim|required');
		$this->form_validation->set_rules('last','last','trim|required');


		if($this->form_validation->run())
		{
			$data= [
				'first'=>$this->input->post('first'),
				'last'=>$this->input->post('last'),
				'phone'=>$this->input->post('phone')
			];

			$this->load->model('EmpModel');
			$this->EmpModel->insertEmp($data);
			$this->index();
		}
		else{
			$this->add();
			}

	}


	public function edit($id){


		$this->load->view('frontend/templetes/header');
		$this->load->model('EmpModel');
		$data['employee']=$this->EmpModel->editEmp($id);

		$this->load->view('frontend/edit',$data);

		$this->load->view('frontend/templetes/footer');

	}

	public function update($id){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first','first','trim|required');
		$this->form_validation->set_rules('last','last','trim|required');


		if($this->form_validation->run())
		{
			$data= [
				'first'=>$this->input->post('first'),
				'last'=>$this->input->post('last'),
				'phone'=>$this->input->post('phone')
			];

			$this->load->model('EmpModel');
			$this->EmpModel->updateEmp($data,$id);
			$this->index();
		}
		else{
			$this->edit($id);
		}
		$this->load->model('EmpModel');
		$this->EmpModel->updateEmp($data,$id);
	}



	public function delete($id){

		$this->load->model('EmpModel');
		$data['employee']=$this->EmpModel->deleteEmp($id);
        $this->index();

	}
}
