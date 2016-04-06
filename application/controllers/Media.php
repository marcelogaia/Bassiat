<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	protected $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->data = Globals::get_data();
	}

	public function index()
	{
		$this->load->model('media_model');
		$this->data['medias'] = $this->media_model->get_medias();
		$this->load->view('midia',$this->data);
	}
}
