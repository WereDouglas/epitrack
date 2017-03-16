<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Outbreak extends CI_Controller {

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

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $student = array('fname' => $this->input->post('fname'), 'lname' => $this->input->post('lname'), 'contact' => $this->input->post('contact'));
        $this->Md->update($id, $student, 'student');
        $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>   Information updated	</strong><div>');
    }
    
  
    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }   
    public function details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);
    
        $query = $this->Md->get('id', $ID, 'outbreak');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }
        $this->load->view('outbreak-details', $data);
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
                    $student = array($field_name => $val,'status'=>'update','verified'=>'false');
                    $this->Md->update($user_id, $student, 'outbreak');
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

        $query = $this->Md->delete($id, 'outbreak');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
           // $this->session->set_flashdata('msg', $msg);
            //redirect('/management/outbreak', 'refresh');
            echo $msg;
        } else {
            $msg = '<span style="color:red">action failed</span>';
             echo $msg;
            //$this->session->set_flashdata('msg', $msg);
             // redirect('/management/outbreak', 'refresh');
        }
    }

}
