<?php

class Site extends CI_Controller {

	function index()
	{
		$this->load->view('admin');
	}

	function create()
	{
		$data = array(
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description')
			);
		$this->site_model->add_record($data);
		$this->index();
	}

}