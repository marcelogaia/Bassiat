<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Constructor method. Call the parent constructor and loads and models used
	 * in the class.
	 */
	public function __construct(){
		parent::__construct();
        $this->load->model('Media_model');
        $this->load->model('Project_model');
	}

	/**
	 * The main index page. Simple loads the view if the user is logged in.
	 */
	public function index(){
        if(!$this->logged_in()) redirect("painel/login");
		$this->load->view('admin/general-admin');
	}

	/**
	 * Loads all medias and send it to the view.
	 */
	public function medias(){
        if(!$this->logged_in()) redirect("painel/login");
        $data['medias'] = $this->Media_model->get_medias(0);

        $this->load->view('admin/edit-media', $data);
	}

	/**
	 * Loads all projects and the number of them which are featured and send it 
	 * to the view.
	 */
    public function projects(){
        if(!$this->logged_in()) redirect("painel/login");
        $data['projects'] = $this->Project_model->get_projects(0);
        $data['numfeatured'] = $this->Project_model->get_num_featured();

        $this->load->view('admin/edit-projects', $data);
    }

	/**
	 * Creates a new media if $id > 0 with the post information, it gets 
	 * updates the registry otherwise.
	 * 
	 * @param int $id 		The id number of the media
	 */
	public function add_media($id = 0){
        if(!$this->logged_in()) redirect("painel/login");

        $this->load->helper('form');

        $blank = new Media_model();
        $blank->id = $id;
        $data['media'] = $blank;

        if($this->input->post('id')){

            $data['id']             = (int) $this->input->post('id');
            $data['name']           = $this->input->post('name');
            $data['url_path']       = $this->input->post('url_path');

            $path = $data['url_path'] == "" ? $this->url_path_builder($data['name'],"media") :
                $this->check_path($data['url_path'],"media");

            $data['url_path']       = $path;

            $data['img_1']          = $this->upload('img_1','uploads/media/'.$path, '01');
            $data['img_2']          = $this->upload('img_2','uploads/media/'.$path, '02');
            $data['img_3']          = $this->upload('img_3','uploads/media/'.$path, '03');
            $data['img_4']          = $this->upload('img_4','uploads/media/'.$path, '04');
            $data['img_5']          = $this->upload('img_5','uploads/media/'.$path, '05');

            if($data['id'] > 0) $this->Media_model->update_entry($data);
            else                $this->Media_model->insert_entry($data);

            redirect('painel/midias');
        }

        if ($id > 0)
            $data['media'] = $this->Media_model->get_media($id);

		$this->load->view('admin/add-media', $data);
	}

	/**
	 * Creates a new project if $id > 0 with the post information, it gets 
	 * updates the registry otherwise.
	 * 
	 * @param int $id 		The id number of the project
	 */
	public function add_project($id = 0){
        if(!$this->logged_in()) redirect("painel/login");

        $this->load->helper('form');

        $blank = new Project_model();
        $blank->blank();
        $data['project'] = $blank;

        if($this->input->post('id') != ""){
            $data['id']             = (int) $this->input->post('id');
            $data['name']           = $this->input->post('name');
            $data['category']       = $this->input->post('category');
            $data['tags']           = $this->input->post('tags');
            $data['featured']       = $this->input->post('featured');
            $data['text_1']         = $this->input->post('text_1');
            $data['text_2']         = $this->input->post('text_2');
            $data['text_3']         = $this->input->post('text_3');
            $data['inside_text_1']  = $this->input->post('inside_text_1');
            $data['inside_text_2']  = $this->input->post('inside_text_2');

            $data['url_path']       = $this->input->post('url_path');
            $path = $data['url_path'] == "" ? $this->url_path_builder($data['name'],"projects") :
                                                $this->check_path($data['url_path'],"projects");

            $data['url_path']       = $path;

            $data['featured_img']   = $this->upload('featured_img'  ,'uploads/projects/'.$path, 'featured');
            $data['img_1']          = $this->upload('img_1'         ,'uploads/projects/'.$path, '01');
            $data['img_2']          = $this->upload('img_2'         ,'uploads/projects/'.$path, '02');
            $data['img_3']          = $this->upload('img_3'         ,'uploads/projects/'.$path, '03');
            $data['img_4']          = $this->upload('img_4'         ,'uploads/projects/'.$path, '04');
            $data['img_5']          = $this->upload('img_5'         ,'uploads/projects/'.$path, '05');
            $data['img_6']          = $this->upload('img_6'         ,'uploads/projects/'.$path, '06');
            $data['img_7']          = $this->upload('img_7'         ,'uploads/projects/'.$path, '07');
            $data['img_8']          = $this->upload('img_8'         ,'uploads/projects/'.$path, '08');
            $data['img_9']          = $this->upload('img_9'         ,'uploads/projects/'.$path, '09');
            $data['img_10']         = $this->upload('img_10'        ,'uploads/projects/'.$path, '10');
            $data['img_11']         = $this->upload('img_11'        ,'uploads/projects/'.$path, '11');

            if($data['id'] > 0) $this->Project_model->update_entry($data);
            else                $this->Project_model->insert_entry($data);
            
            redirect('painel/projetos');
        }

        if ($id > 0)
            $data['project'] = $this->Project_model->get_project($id);

		$this->load->view('admin/add-project', $data);
	}

	/**
	 * Sends a command to the model Project_model so it removes the registry from 
	 * the database and redirects to the projects page.
	 * 
	 * @param $id 		ID of the project being removed
	 */
    public function remove_project($id = 0){
        if($id > 0) $this->Project_model->remove($id);
        redirect("painel/projetos");
    }

    /**
     * Move the featured projects up and down or remove them based on the direction
     * passed. If $direction = 1, moves it up, -1 moves it down and false remove from
     * the features or sub-features.
     *
     * @param $id  int          ID of the project being moved
     * @param $direction int    The direction the project is being moved
     *                          (1 for up, -1 for down, 11 for first,
     *                          false for remove from featured list)
     */
    public function project_move($id, $direction){
        /*
         * Gets the project current position
         * */
        $project = $this->Project_model->get_project($id);
        $order = $project->featured_order;

        /*
         * If it's zero try check if there's any project at
         * position 5, if there's any, throw an error
         * */
        if(is_null($order) and $direction != 11){
            //echo "up";
            if($direction == 1){
                $next_featured = $this->Project_model->next_featured();
                $next_featured = $next_featured == 1 ? 2 : $next_featured;
                $swapped_project = $this->Project_model->project_at_order($next_featured);

                if($this->Project_model->next_featured() > 4)
                    $this->Project_model->update_order($swapped_project->id, null);
                /*else
                    $this->Project_model->update_order($swapped_project->id, $next_featured+1);*/

                $this->Project_model->update_order($project->id, $next_featured+1);
            }
        } else {
            /*
             * If the project is already featured, move it up or down
             * unless it's at the position 1 or 5, making not possible
             * to move them up or down respectively
             * */
            if($direction == 1){
                //echo "up";
                /*
                 * Swapping positions or this project with its previous in the featured list (moving up)
                 * */
                if($order > 2){
                    $swapped_project = $this->Project_model->project_at_order($order - 1);
                    $this->Project_model->update_order($swapped_project->id, $order);
                    $this->Project_model->update_order($project->id, $order-1);
                }
            } elseif($direction == -1) {
                //echo "down";
                /*
                 * Swapping positions or this project with its next in the featured list (moving down)
                 * */
                if($order < 5){
                    $swapped_project = $this->Project_model->project_at_order($order + 1);
                    $this->Project_model->update_order($swapped_project->id, $order);
                    $this->Project_model->update_order($project->id, $order+1);
                }
            } elseif($direction == 11) {
                //echo "destaque";
                /*
                 * Moving it to first and moving every other featured project down by one.
                 * */
                $featured_projects = array();
                for($i = 1; $i <= $this->Project_model->get_num_featured(); $i++){
                    $featured_projects[$i] = $this->Project_model->project_at_order($i);
                }

                foreach($featured_projects as $p){
                    if($p->featured_order < 5){
                        $this->Project_model->update_order($p->id, ($p->featured_order+1));
                    } else {
                        $this->Project_model->update_order($p->id, null);
                    }
                }

                $this->Project_model->update_order($project->id, 1);
                for($i = 1; $i <= $this->Project_model->get_num_featured(); $i++){
                    $featured_projects[$i] = $this->Project_model->project_at_order($i);
                }
            } else {
                //echo "remover";
                $this->Project_model->update_order($project->id, null);
            }

        }

        redirect("painel/projetos");
    }


	/**
	 * Sends a command to the model Media_model so it removes the registry from 
	 * the database and redirects to the media page.
	 * 
	 * @param $id 		ID of the media being removed
	 */
    public function remove_media($id = 0){
        if($id > 0) $this->Media_model->remove($id);
        redirect("painel/midias");
    }

    /**
     * Login and creates a CodeIgniter session with the information passed. If the information
     * doesn't match, shows a error message. If no information is passed, shows the login page.
     */
	public function login(){
        $this->load->model('User_model');
        $data['login'] = "";
        if($this->input->post('user')){
            $username = $this->input->post('user');
            $password = md5($this->input->post('password') . "_b@ss1at");
            $result = $this->User_model->check_user_password($username, $password);

            if($result){
                $session_data = array(
                    'username' => $result->name,
                    'email' => $result->username
                );

                $this->session->set_userdata('logged_in',$session_data);
            }
            else {
                $data['login'] = "Nome de usuario ou senha nao encontrados. <br /> Por favor, tente novamente.";
            }
        }

        if($this->logged_in()) redirect("painel/");

		$this->load->view('admin/login',$data);
	}

	/**
	 * Logout any users connected and redirects to the login area.
	 */
    public function logout(){
        $this->session->sess_destroy();
        redirect("painel/");
    }

    /**
     * Simple checks if there's any user logged in.
     */
    public function logged_in(){
        return isset($this->session->userdata['logged_in']);
    }

    /**
     * Uploads the file passed on the <input type="file" name="$fieldname"> to the 
     * directory $directory and rename it to $filename.
     * 
     * @param $fieldname 	The name of the input of type file
     * @param $directory 	The directory in which the files will be stored
     * @param $filename 	The new name of the file after uploaded
     * 
     * @return string 		The file name if successful, blank if not.
     */
    private function upload($fieldname, $directory, $filename){
        /* Set the path where the files uploaded will be copied. 
        NOTE: if using linux, set the folder to permission 777 */
        $config['upload_path'] = 'public/' . $directory;
        $config['overwrite'] = true;

        $config['file_name'] = $filename;
        // Set the filter image types
        $config['allowed_types'] = 'gif|jpg|png';

        // Load the upload library
        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $this->upload->set_allowed_types('*');

        $data['upload_data'] = '';

        // If not successful, set the error message
        if (!$this->upload->do_upload($fieldname)) {
            $data = array('msg' => $this->upload->display_errors());
            return "";
        } else { // Else, set the success message
            $data = array('msg' => "Upload success!");

            $data['upload_data'] = $this->upload->data();
            return $data['upload_data']['file_name'];
        }
    }

    /**
     * Creates a friendly for the object path based on the $url passed and the kind of 
     * object it is. Increment the name of the directory / url if the url passed already 
     * exists in the database or if there's already a directory with that name.
     * 
     * @param string $url 		The path being checked / created
     * @param string $table 	Name of the table of which the object belongs
     * 
     * @return string 			The final name of the directory created
     * 
     * @see check_path
     */
    public function url_path_builder($url,$table){
        switch ($table){
            case 'media':
                $result = $this->Media_model->get_by_url($url);
                break;
            case 'projects':
                $result = $this->Project_model->get_by_url($url);
                break;
            default:
                return false;
        }

        $url = url_title($url,'-',true);

        // If there's already a url-path with that $url or if there's already a directory
        if(sizeof($result) > 0 or file_exists('public/uploads/' . $table . "/" . $url)){
            $newurl = explode("-",$url);
            $last = $newurl[count($newurl)-1];

            $name = $this->str_lreplace($last,'',$url);
            $number = $last;
            return $this->url_path_builder($name . ++$number, $table);
        } else{ // If not, create it.
            $newurl = explode("-",$url);

            // If the url has less than 2 segments (name-1) names or the last one is not a number (name-project-1)
            if(count($newurl) < 2 OR !is_numeric($newurl[count($newurl)-1])){
                return $this->url_path_builder($url . "-1",$table);
            } else {
                return $this->check_path($url, $table);
            }
        }
    }

    /**
     * Checks if the directory already exists, if it doesn't, creates it.
     * 
     * @return string 		The name of the folder being checked / created
     * @see url_path_builder
	*/
    private function check_path($url, $table){
        $path = 'public/uploads/' . $table . "/" . $url;

        if(!file_exists($path)){
            mkdir($path);
        }

        return $url;
    }

    /**
     * Replaces the last occurence of a string ($search) with a second string ($replace) 
     * in the bigger string ($subject)
     * 
     * @param $search 		The string which will be replaced
     * @param $replace 		The string that will replace the first one
     * @param $subject 		The context where the replacement will happen
     * 
     * @return string 		The new context with the replaced string
     */
    private function str_lreplace($search, $replace, $subject){
        $pos = strrpos($subject, $search);

        if($pos !== false)
        {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
}
