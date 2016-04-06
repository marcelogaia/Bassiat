<?php
/**
 * Created by PhpStorm.
 * User: Marcelo Gaia
 * Date: 2015-10-02
 * Time: 11:20 AM
 */

class Project_model extends CI_Model {

    public $id = 0;
    public $name = "";
    public $category = "";
    public $tags = "";
    public $featured_order = null;
    public $featured_img = "";
    public $text_1 = "";
    public $text_2 = "";
    public $text_3 = "";
    public $inside_text_1 = "";
    public $inside_text_2 = "";
    public $img_1 = "";
    public $img_2 = "";
    public $img_3 = "";
    public $img_4 = "";
    public $img_5 = "";
    public $img_6 = "";
    public $img_7 = "";
    public $img_8 = "";
    public $img_9 = "";
    public $img_10 = "";
    public $img_11 = "";
    public $url_path = "";

    public function __construct()
    {
        parent::__construct();

        $this->fix_order();
    }

    public function blank(){
        $this->id = 0;
        $this->name = "";
        $this->category = "";
        $this->tags = "";
        $this->featured_order = null;
        $this->featured_img = "";
        $this->text_1 = "";
        $this->text_2 = "";
        $this->text_3 = "";
        $this->inside_text_1 = "";
        $this->inside_text_2 = "";
        $this->img_1 = "";
        $this->img_2 = "";
        $this->img_3 = "";
        $this->img_4 = "";
        $this->img_5 = "";
        $this->img_6 = "";
        $this->img_7 = "";
        $this->img_8 = "";
        $this->img_9 = "";
        $this->img_10 = "";
        $this->img_11 = "";
        $this->url_path = "";
    }

    public function get_projects($rows = 10)
    {
        $this->db->select("id, name, tags, featured_order, featured_order, featured_img, url_path");
        $this->db->order_by("featured_order",'ASC');
        if($rows > 0)
            $query = $this->db->get('project', $rows);
        else
            $query = $this->db->get('project');

        return $query->result();
    }

    public function get_featured()
    {
        $this->db->select("id, name, tags, featured_order, featured_img, url_path");
        $this->db->order_by('featured_order,id','ASC');
        $this->db->where('featured_order IS NOT NULL', null, false);
        $query = $this->db->get('project');
        return $query->result();
    }

    public function get_project($id){
        $this->fix_order();
        $this->db->where('id', $id);
        $query = $this->db->get('project',1);
        if(sizeof($query->result()) > 0){
            $result = $query->result();
            return $result[0];
        } else return null;
    }

    public function get_project_by_name($url_path){
        $this->db->where('url_path', $url_path);
        $query = $this->db->get('project',1);
        if(sizeof($query->result()) > 0){
            $result = $query->result();
            return $result[0];
        } else return null;
    }

    public function insert_entry($data)
    {
        $this->name             = $data['name'];
        $this->category         = $data['category'];
        $this->tags             = $data['tags'];
        $this->text_1           = $data['text_1'];
        $this->text_2           = $data['text_2'];
        $this->text_3           = $data['text_3'];
        $this->inside_text_1    = $data['inside_text_1'];
        $this->inside_text_2    = $data['inside_text_2'];
        $this->url_path         = $data['url_path'];

        if($data['featured_img'] != null and $data['featured_img'] != "")
            $this->featured_img = $data['featured_img'];
        else
            unset($this->featured_img);

        if($data['img_1'] != null and $data['img_1'] != "")
            $this->img_1 = $data['img_1'];
        else
            unset($this->img_1);

        if($data['img_2'] != null and $data['img_2'] != "")
            $this->img_2 = $data['img_2'];
        else
            unset($this->img_2);

        if($data['img_3'] != null and $data['img_3'] != "")
            $this->img_3 = $data['img_3'];
        else
            unset($this->img_3);

        if($data['img_4'] != null and $data['img_4'] != "")
            $this->img_4 = $data['img_4'];
        else
            unset($this->img_4);

        if($data['img_5'] != null and $data['img_5'] != "")
            $this->img_5 = $data['img_5'];
        else
            unset($this->img_5);

        if($data['img_6'] != null and $data['img_6'] != "")
            $this->img_6 = $data['img_6'];
        else
            unset($this->img_6);

        if($data['img_7'] != null and $data['img_7'] != "")
            $this->img_7 = $data['img_7'];
        else
            unset($this->img_7);

        if($data['img_8'] != null and $data['img_8'] != "")
            $this->img_8 = $data['img_8'];
        else
            unset($this->img_8);

        if($data['img_9'] != null and $data['img_9'] != "")
            $this->img_9 = $data['img_9'];
        else
            unset($this->img_9);

        if($data['img_10'] != null and $data['img_10'] != "")
            $this->img_10 = $data['img_10'];
        else
            unset($this->img_10);

        if($data['img_11'] != null and $data['img_11'] != "")
            $this->img_11 = $data['img_11'];
        else
            unset($this->img_11);

        unset($this->id);

        $this->db->insert('project', $this);
        $this->fix_order();
    }

    public function update_entry($data)
    {
        $this->name             = $data['name'];
        $this->category         = $data['category'];
        $this->tags             = $data['tags'];
        $this->text_1           = $data['text_1'];
        $this->text_2           = $data['text_2'];
        $this->text_3           = $data['text_3'];
        $this->inside_text_1    = $data['inside_text_1'];
        $this->inside_text_2    = $data['inside_text_2'];
        $this->url_path         = $data['url_path'];

        if($data['featured_img'] != null and $data['featured_img'] != "")
            $this->featured_img = $data['featured_img'];
        else
            unset($this->featured_img);

        if($data['img_1'] != null and $data['img_1'] != "")
            $this->img_1 = $data['img_1'];
        else
            unset($this->img_1);

        if($data['img_2'] != null and $data['img_2'] != "")
            $this->img_2 = $data['img_2'];
        else
            unset($this->img_2);

        if($data['img_3'] != null and $data['img_3'] != "")
            $this->img_3 = $data['img_3'];
        else
            unset($this->img_3);

        if($data['img_4'] != null and $data['img_4'] != "")
            $this->img_4 = $data['img_4'];
        else
            unset($this->img_4);

        if($data['img_5'] != null and $data['img_5'] != "")
            $this->img_5 = $data['img_5'];
        else
            unset($this->img_5);

        if($data['img_6'] != null and $data['img_6'] != "")
            $this->img_6 = $data['img_6'];
        else
            unset($this->img_6);

        if($data['img_7'] != null and $data['img_7'] != "")
            $this->img_7 = $data['img_7'];
        else
            unset($this->img_7);

        if($data['img_8'] != null and $data['img_8'] != "")
            $this->img_8 = $data['img_8'];
        else
            unset($this->img_8);

        if($data['img_9'] != null and $data['img_9'] != "")
            $this->img_9 = $data['img_9'];
        else
            unset($this->img_9);

        if($data['img_10'] != null and $data['img_10'] != "")
            $this->img_10 = $data['img_10'];
        else
            unset($this->img_10);

        if($data['img_11'] != null and $data['img_11'] != "")
            $this->img_11 = $data['img_11'];
        else
            unset($this->img_11);

        unset($this->id);

        $this->db->update('project', $this, array('id' => $data['id']));

        $this->fix_order();
    }

    public function remove($id){

        $project = $this->get_project($id);
        if(!is_null($project)){
            $dir = "public/uploads/projects/" . $project->url_path . "/";

            foreach (glob($dir."/*.*") as $filename) {
                if (is_file($filename)) {
                    unlink($filename);
                }
            }
            rmdir($dir);

            $this->db->delete('project',array('id' => $id));
        }
        $this->fix_order();
    }

    public function save_project($data){
        if(iseet($data['id'])){
            if($data['id'] > 0){
                $this->update_entry($data);
            } else {
                $this->insert_entry($data);
            }
        }
        $this->fix_order();
    }

    public function get_by_url($url){
        $query = $this->db->get_where('project',array('url_path'=>$url));

        $result = $query->result();
        return $result;
    }

    public function get_by_category($category){
        $query = $this->db->get_where('project',array('category'=>$category));
        return $query->result();
    }

    public function get_num_featured(){
        $this->db->where('featured_order IS NOT NULL', null, false);
        $query = $this->db->get('project');
        return $query->num_rows();
    }

    public function project_at_order($order){
        //$this->fix_order();
        $query = $this->db->get_where('project', array('featured_order' => $order));
        $result = $query->result();
        if($query->num_rows() > 0)
            return $result[0];
        else
            return false;
    }

    public function next_featured(){
        //$this->fix_order();
        $this->db->select('max(featured_order) as max');
        $query = $this->db->get('project');
        $result = $query->result();
        return (int) $result[0]->max;
    }

    public function update_order($id, $order){
        foreach($this as $key=>$value)
            unset($this->$key);

        $this->featured_order = $order;

        $this->db->update('project',$this,array('id'=>$id));
    }

    private function fix_order(){
        $num = $this->get_num_featured();
        $featured = $this->get_featured();
        for($i = 1; $i <= $num; $i++){
            $id = $featured[$i - 1]->id;
            if($i > 5) $i = null;
            $this->update_order($id, $i);
        }
    }

}