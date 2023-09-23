<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model("Allmodel");
	}

	public function index()
	{
		$data["display"] = $this->Allmodel->FetchData("information",array());
		$this->load->view('form_view',$data);

	}

	public function save()
	{
		$this->form_validation->set_rules('studentID', 'studentID', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		
		if($this->form_validation->run())
		{
			$data = array(
				"studentID" => $this ->input->post("studentID"),
				"name"  => $this->input->post("name"),
				"address"    => $this->input->post("address"),
			);

			$this->db->insert("information",$data);
			redirect("/");
		}
		else
		{
			
			$this->index();
		}
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data["info"] = $this->Allmodel->FetchData("information",array("id"=>$id));
		$this->load->view("form_view",$data);
	}

	public function save_update()
	{
		$this->form_validation->set_rules('studentID', 'studentID', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');

		if($this->form_validation->run())
		{
			$id = $this->uri->segment(3);

			$data = array(
				"studentID"    	   => $this ->input->post("studentID"),
				"name"       => $this->input->post("name"),
				"address"         => $this->input->post("address"),
			);

			$this->db->where("id",$id);
			$this->db->update("information",$data);
			redirect("/");
		}
		else
		{
			
			$this->update();
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$this->db->delete('information');
		redirect("/");
	}
}
	
