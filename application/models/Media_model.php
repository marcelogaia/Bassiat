<?php
/**
 * Created by PhpStorm.
 * User: Marcelo Gaia
 * Date: 2015-10-02
 * Time: 11:20 AM
 */

class Media_model extends CI_Model {

    public $id;
    public $name;
    public $img_1;
    public $img_2;
    public $img_3;
    public $img_4;
    public $img_5;
    public $url_path;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_medias($rows = 10)
    {
        if($rows > 0)
            $query = $this->db->get('media', $rows);
        else
            $query = $this->db->get('media');

        return $query->result();
    }

    public function get_media($id){
        $this->db->where('id', $id);
        $query = $this->db->get('media',1);
        if(sizeof($query->result()) > 0){
            $result = $query->result();
            return $result[0];
        } else return null;
    }

    public function insert_entry($data)
    {
        $this->name         = $data['name'];
        $this->url_path     = $data['url_path'];

        if($data['img_1'] != null and $data['img_1'] != "")
            $this->img_1 = $data['img_1'];

        if($data['img_2'] != null and $data['img_2'] != "")
            $this->img_2 = $data['img_2'];

        if($data['img_3'] != null and $data['img_3'] != "")
            $this->img_3 = $data['img_3'];

        if($data['img_4'] != null and $data['img_4'] != "")
            $this->img_4 = $data['img_4'];

        if($data['img_5'] != null and $data['img_5'] != "")
            $this->img_5 = $data['img_5'];

        unset($this->id);

        $this->db->insert('media', $this);
    }

    public function update_entry($data)
    {
        $this->name         = $data['name'];
        $this->url_path     = $data['url_path'];

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

        unset($this->id);

        $this->db->update('media', $this, array('id' => $data['id']));
    }

    public function remove($id){

        $media = $this->get_media($id);
        if(!is_null($media)){
            $dir = "public/uploads/media/" . $media->url_path . "/";

            foreach (glob($dir."/*.*") as $filename) {
                if (is_file($filename)) {
                    unlink($filename);
                }
            }
            rmdir($dir);

            $this->db->delete('media',array('id' => $id));
        }
    }

    public function get_by_url($url){
        return $this->db->get_where('media',array('url_path'=>$url));
    }
}