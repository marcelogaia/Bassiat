<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	protected $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->data = Globals::get_data();
	}

	public function index()
	{
		$this->load->view('contato',$this->data);
	}

	public function mailing(){
		$this->load->view('mailing', $this->data);
	}
}
