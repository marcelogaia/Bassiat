<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	protected $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->data = Globals::get_data();
		$this->load->model('Project_model');
	}

    public function index()
    {
        $this->data['projects'] = $this->Project_model->get_projects(5);
        $this->data['showmore'] = true;
        $this->load->view('projetos',$this->data);
    }

    public function all()
    {
        $this->data['projects'] = $this->Project_model->get_projects();
        $this->data['showmore'] = false;
        $this->load->view('projetos',$this->data);
    }

	public function get_project($id)
	{
        $this->data['project'] = $this->Project_model->get_project($id);
        if(is_null($this->data['project'])) redirect('/projetos');
		$this->load->view('project',$this->data);
	}

	public function get_project_by_name($url_path)
	{
        $this->data['project'] = $this->Project_model->get_project_by_name($url_path);
        if(is_null($this->data['project'])) redirect('/projetos');
		$this->load->view('project',$this->data);
	}

    public function get_projects_by_category($category){
        $this->data['projects'] = $this->Project_model->get_by_category($category);
        $this->load->view('projetos',$this->data);
    }
}
