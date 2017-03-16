<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surveillance extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        // $query = $this->Md->show('metar');
        //  var_dump($query);


        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }
        $query = $this->Md->show('student');
        //  var_dump($query);
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }
        $sender = $this->session->userdata('name');
        //$query = $this->Md->get('reciever',$sender,'chat');
        $query = $this->Md->show('chat');

        //  var_dump($query);
        if ($query) {
            $data['chats'] = $query;
        } else {
            $data['chats'] = array();
        }

        $this->load->view('student-home', $data);
    }

    public function details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);
    
        $query = $this->Md->get('id', $ID, 'surveillance');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }
        $this->load->view('surveillance-details', $data);
    }

      public function updater() {
        $this->load->helper(array('form', 'url'));

        if (!empty($_POST)) {

            foreach ($_POST as $field_name => $val) {
                //clean post values
                $field_id = strip_tags(trim($field_name));
                $val = strip_tags(trim(mysql_real_escape_string($val)));
                //from the fieldname:user_id we need to get user_id
                $split_data = explode(':', $field_id);
                $user_id = $split_data[1];
                $field_name = $split_data[0];
                if (!empty($user_id) && !empty($field_name) && !empty($val)) {
                    //update the values
                    $student = array($field_name => $val);
                    $this->Md->update($user_id, $student, 'surveillance');
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }
   
    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $this->Md->remove_table($id, 'profile', 'image');
        //delete($id,$table);
        //remove($id,$table,$column)

        $query = $this->Md->delete($id, 'surveillance');

        if ($this->db->affected_rows() > 0) {
           echo $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('msg', $msg);
            //redirect('/profile', 'refresh');
        } else {
          echo  $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            //redirect('/profile', 'refresh');
        }
    }

}
