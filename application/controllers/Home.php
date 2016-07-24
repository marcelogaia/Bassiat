<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Project_model');
	}

	public function index()
	{
        $data['featured'] = $this->Project_model->get_featured();
		$this->load->view('home',$data);
	}

	public function debug()
	{
		echo $this->router->class . " - " . $this->router->method;
	}
}
