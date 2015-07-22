<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        // $query = $this->MD->show('metar');
        //  var_dump($query);

        $query = $this->MD->show('image');
        if ($query) {
            $data['images'] = $query;
        } else {
            $data['images'] = array();
        }

        $this->load->view('admin/image', $data);
    }
  


    public function delete() {
        $id = $this->uri->segment(3);
        //remove($id,$table,$column)
        
        $query = $this->MD->remove($id,'image','url');
        $query = $this->MD->delete($id, 'image');
        
        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('action', $msg);
            redirect('/image', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('action', $msg);
           redirect('/image', 'refresh');
        }
    }
     public function image() {
        $id = $this->uri->segment(3);
        $query = $this->MD->remove($id);
        $query = $this->MD->delete($id, 'image');
        
        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('action', $msg);
            redirect('/project', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('action', $msg);
           redirect('/project', 'refresh');
        }
    }


}
