<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailing extends CI_Controller {

	protected $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->data = Globals::get_data();
	}

	public function index()
	{
		$this->load->view('mailing',$this->data);
	}
}
