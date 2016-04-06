<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	protected $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->data = Globals::get_data();
	}

	public function index()
	{
		$this->load->view('quem',$this->data);
	}
}
