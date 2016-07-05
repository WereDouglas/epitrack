<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Field extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {

        $studentID = $this->session->userdata('id');
        $query = $this->Md->get('studentID', $studentID, 'fields');
        if ($query) {
            $data['fd'] = $query;
        } else {
            $data['fd'] = array();
        }
        $this->load->view('field-page', $data);
    }
     public function view() {

        $studentID = $this->session->userdata('id');
        $query = $this->Md->query('SELECT * FROM fields INNER JOIN student ON fields.studentID=student.id');
        if ($query) {
            $data['fd'] = $query;
        } else {
            $data['fd'] = array();
        }
        $this->load->view('field-page-all', $data);
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->Md->get('id', $id, 'profile');

        if ($query) {
            $data['profile'] = $query;
        } else {
            $data['profile'] = array();
        }

        $this->load->view('admin/edit-profile', $data);
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $studentID = $this->session->userdata('id');
        $name = $this->input->post('name');
        $notes = $this->input->post('notes');
        $location = $this->input->post('location');

        if ($name != "") {
            $file_element_name = 'userfile';
            $config['upload_path'] = 'field/';
            // $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                echo $msg = $this->upload->display_errors('', '');
            } else {
                $data = $this->upload->data();
                $title = $this->input->post('title');
                $file = $data['file_name'];
                $publication = array('file' => $file, 'name' => $name, 'dos' => date("y-m-d"), 'location' => $location, 'notes' => $notes, 'studentID' => $studentID);
                $this->Md->save($publication, 'fields');
                
               // redirect('/student/publication', 'refresh');

                $query = $this->Md->get('studentID', $studentID, 'fields');
                if ($query) {
                    $data['fd'] = $query;
                } else {
                    $data['fd'] = array();
                }
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>
                                             Field  Information Saved</strong>									
						</div>');
                $this->load->view('field-page', $data);
            }
        }
    }

    public function activate_publication() {
        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $actives = trim($this->input->post('actives'));
        if ($actives == "yes") {
            $active = "no";
        }
        if ($actives == "no") {
            $active = "yes";
        }
        if ($this->session->userdata('level') > 0) {

            $publication = array('verified' => $active);
            $this->Md->update($id, $publication, 'publication');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action ' . '	</strong>									
						</div>');
            // redirect('/management/tracks', 'refresh');
        }
    }

    public function activate() {

        $this->load->helper(array('form', 'url'));

        $id = $this->uri->segment(3);
        $actives = $this->uri->segment(4);
        if ($actives == "active") {
            $active = "false";
        }
        if ($actives == "false") {
            $active = "active";
        }
        if ($this->session->userdata('level') > 0) {

            $student = array('status' => $active);
            $this->Md->update($id, $student, 'student');
        }
    }

    public function verify_qualification() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $actives = $this->uri->segment(4);
        $table = $this->uri->segment(5);
        if ($actives == "true") {
            $active = "false";
        }
        if ($actives == "false") {
            $active = "true";
        }


        if ($this->session->userdata('level') > 0) {

            $quali = array('verified' => $active);
            $this->Md->update($id, $quali, $table);
        }
    }

    public function accept() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $actives = $this->uri->segment(4);
        $table = $this->uri->segment(5);
        if ($actives == "yes") {
            $active = "no";
        }
        if ($actives == "no") {
            $active = "yes";
        }

        if ($this->session->userdata('level') > 0) {
            $quali = array('accepted' => $active);
            $this->Md->update($id, $quali, $table);
        }
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $this->Md->remove_table($id, 'profile', 'image');
        //delete($id,$table);
        //remove($id,$table,$column)

        $query = $this->Md->delete($id, 'profile');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/profile', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/profile', 'refresh');
        }
    }

    public function image() {
        $id = $this->uri->segment(3);
        $query = $this->Md->remove($id);
        $query = $this->Md->delete($id, 'image');

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