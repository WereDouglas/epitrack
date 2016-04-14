<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pending extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
  if ($this->session->userdata('level') == 1) {
        $query = $this->Md->query("SELECT * FROM pending");
        //  var_dump($query);
  }
   if ($this->session->userdata('level') == 2) {
        $query = $this->Md->query("SELECT * FROM pending WHERE country='".$this->session->userdata('country')."'");
        //  var_dump($query);
  }
        if ($query) {
            $data['logs'] = $query;
        } else {
            $data['logs'] = array();
        }
        $this->load->view('log-page', $data);
    }

    public function client() {
        $query = $this->Md->query("SELECT * FROM users where types = 'client'");
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $this->load->view('client-page', $data);
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $email = $this->input->post('email');
        $address = $this->input->post('details');

        $user = array('name' => $name, 'address' => $address, 'contact' => $contact, 'email' => $email, 'created' => date('Y-m-d H:i:s'));
        $this->Md->update($id, $user, 'users');

        $content = json_encode($user);
        $query = $this->Md->query("SELECT * FROM client where org = '" . $this->session->userdata('orgid') . "'");
        if ($query) {
            foreach ($query as $res) {
                $syc = array('object' => 'users', 'content' => $content, 'action' => 'update', 'oid' => $id, 'created' => date('Y-m-d H:i:s'), 'checksum' => $this->GUID(), 'client' => $res->name);
                $file_id = $this->Md->save($syc, 'sync_data');
            }
        }
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'pending');
        if ($this->db->affected_rows() > 0) {

            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                Information deleted	</strong>									
						</div>');
            redirect('pending/', 'refresh');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                             Action Failed	</strong>									
						</div>');
            redirect('pending/', 'refresh');
        }
    }

    public function execute() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $query = $this->Md->query("SELECT * FROM pending WHERE id = '" . $id . "'");
        //  var_dump($query);
        if ($query) {

            foreach ($query as $res) {
                $action = $res->action;
                $object = $res->object;
                $oid = $res->oid;
                $content = $res->content;
                
            }
             $content =  json_decode($content);
            switch ($action) {
                case delete: 
                      $query = $this->Md->delete($oid, $object);                    
                    break;
                case create:
                    $className = 'label-success';
                    break;
                case update:
                     //$employment = array('organisation' => $organisation, 'location' => $location, 'position' => $position, 'country' => $country, 'sector' => $sector, 'contact' => $contact, 'created' => date('Y-m-d'));
                     $this->Md->update($oid, $content, $object);
                    break;
            }
        }


        $query = $this->Md->delete($id, 'pending');
        if ($this->db->affected_rows() > 0) {

            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                Information deleted	</strong>									
						</div>');
            redirect('pending/', 'refresh');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                             Action Failed	</strong>									
						</div>');
            redirect('pending/', 'refresh');
        }
    }

    public function user() {

        $this->load->view('client-page');
    }

    public function add_client() {


        $this->load->helper(array('form', 'url'));

        //user information
        $userid = $this->GUID();
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $password = $this->session->userdata('code');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $level = 1;
        $type = 'client';
        $orgid = $this->session->userdata('orgid');

        if ($name != "") {

            $password = $password;
            $key = $email;
            $password = $this->encrypt->encode($password, $key);
            $result = $this->Md->check($email, 'email', 'users');

            if (!$result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 email already in use please try again	</strong>									
						</div>');
                redirect('/user/client', 'refresh');
            }

            ///organisation image uploads
            $file_element_name = 'userfile';

            $config['upload_path'] = 'uploads/';
            // $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>' . $msg . '</strong></div>');
            }
            $data = $this->upload->data();

            $submitted = date('Y-m-d');
            $userfile = $data['file_name'];

            $users = array('id' => $userid, 'image' => $userfile, 'email' => $email, 'name' => $name, 'org' => $orgid, 'address' => $address, 'sync' => $sync, 'oid' => $oid, 'contact' => $contact, 'password' => $password, 'types' => $type, 'level' => $level, 'created' => date('Y-m-d H:i:s'), 'status' => 'T');
            $file_id = $this->Md->save($users, 'users');
            $content = array('id' => $userid, 'image' => $userfile, 'email' => $email, 'name' => $name, 'org' => $orgid, 'address' => $address, 'sync' => $sync, 'oid' => $oid, 'contact' => $contact, 'password' => $password, 'types' => $type, 'level' => $level, 'created' => date('Y-m-d H:i:s'), 'status' => 'T');
            $content = json_encode($content);
            $query = $this->Md->query("SELECT * FROM client where org = '" . $this->session->userdata('orgid') . "'");
            if ($query) {
                foreach ($query as $res) {
                    $syc = array('object' => 'users', 'content' => $content, 'action' => 'create', 'oid' => $userid, 'created' => date('Y-m-d H:i:s'), 'checksum' => $this->GUID(), 'client' => $res->name);
                    $file_id = $this->Md->save($syc, 'sync_data');
                }
            }
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                   <strong>New client saved</strong>									
						</div>');

            redirect('/user/client', 'refresh');
        }
        $this->client();
    }

}
