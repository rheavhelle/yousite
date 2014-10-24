<?php

class A_subcat extends CI_Controller {

	function index()
	{
		$this->load->view('a_subcat');
	}

	function create()
	{
		$data = array(
			'category' => $this->input->post('category'),
			'name' => $this->input->post('name')
			);
		$this->site_model->add_record($data);
		$this->index();
	}

}