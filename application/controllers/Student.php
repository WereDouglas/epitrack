<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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


        $query = $this->MD->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }

        $this->load->view('student-home', $data);
    }

    public function register() {


        $this->load->view('student');
    }

    public function bio() {
         //get($field,$value,$table)
        $query = $this->MD->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }
        $studentID = $this -> session -> userdata('id');
         $query = $this->MD->get('id',$studentID,'student');
        //  var_dump($query);
        if ($query) {
            $data['bio'] = $query;
        } else {
            $data['bio'] = array();
        }
        $query = $this->MD->show('country');
        //  var_dump($query);
        if ($query) {
            $data['countries'] = $query;
        } else {
            $data['countries'] = array();
        }
          $query = $this->MD->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }

        $this->load->view('student-bio', $data);
    }
     public function contact() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this -> session -> userdata('id');

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->MD->delete($id, 'contact');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Contact deleted	</strong>									
						</div>');

            redirect('/student/contact', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $contact = $this->input->post('contact');
            $id = $this->input->post('id');


            $contact = array('contact' => $contact);
            $this->MD->update($id, $contact, 'contact');
        }


        $this->load->helper(array('form', 'url'));

        $contact = $this->input->post('contact');
        if ($contact != "") {
            $type = $this->input->post('type');
            
            $get_result = $this->MD->check($contact, 'contact', 'contact');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 This contact is already in use</strong>									
						</div>');
                redirect('/student/contact', 'refresh');
            }
             
            $contact = array('contact' => $contact, 'studentID'=>$studentID, 'type' => $type,'created' => date('Y-m-d'));
            $this->MD->save($contact, 'contact');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 contact saved</strong>									
						</div>');

            redirect('/student/contact', 'refresh');
        } else {
            //$query = $this->MD->get('id', $id, 'profile');
            $query = $this->MD->get('studentID',$studentID,'contact');
            //  var_dump($query);
            if ($query) {
                $data['contacts'] = $query;
            } else {
                $data['contacts'] = array();
            }
            $query = $this->MD->show('track');
            //  var_dump($query);
            if ($query) {
                $data['tracks'] = $query;
            } else {
                $data['tracks'] = array();
            }

            $this->load->view('student-contact', $data);
        }
    }
    public function employment() {
 
        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this -> session -> userdata('id');
       
        
        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->MD->delete($id, 'employment');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 employment record  deleted	</strong>									
						</div>');

           redirect('/student/employment', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));
            $organisation = $this->input->post('organisation');
            $position = $this->input->post('position');
            $id = $this->input->post('id');
            $country = $this->input->post('country');
            $location = $this->input->post('location');
            $sector = $this->input->post('sector');
            $contact = $this->input->post('contact');            

            $employment = array('organisation' => $organisation,'location'=>$location, 'position' => $position, 'country' => $country, 'sector' => $sector, 'contact' => $contact,'created'=>  date('Y-m-d'));
            $this->MD->update($id, $employment, 'employment');
        }
 

            $organisation = $this->input->post('organisation');
            $position = $this->input->post('position');          
            $country = $this->input->post('country');
            $location = $this->input->post('location');
            $sector = $this->input->post('sector');
            $contact = $this->input->post('contact');

           
        if ($this->input->post('organisation') != "" && $id == "") {
               $employment = array('organisation' => $organisation,'studentID'=>$studentID ,'position' => $position, 'country' => $country, 'sector' => $sector, 'contact' => $contact,'created'=>  date('Y-m-d'));
                $this->MD->save($employment, 'employment');
               
                $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Employment information saved</strong>									
						</div>');

         redirect('/student/employment', 'refresh');
        }
        
         $query = $this->MD->get('studentID',$studentID,'employment');
        if ($query) {
            $data['records'] = $query;
        } else {
            $data['records'] = array();
        }
     
        $query = $this->MD->show('student');
        //  var_dump($query);
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }

        $this->load->view('student-employment', $data);
    }

    public function upload() {


        $this->load->helper(array('form', 'url'));

        $title = $this->input->post('title');
        $description = $this->input->post('description');

        $get_result = $this->MD->check($title, 'title', 'profile');
        if ($get_result) {

            if (!empty($_FILES)) {
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $targetPath = getcwd() . '/uploads/';
                $targetFile = $targetPath . $fileName;
                move_uploaded_file($tempFile, $targetFile);

                $name = $fileName;
            }

            $profile = array('title' => $title, 'description' => $description, 'image' => $name, 'submitted' => date('Y-m-d H:m:s'));
            $this->MD->save($profile, 'profile');
            $this->session->set_flashdata('msg', '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  Profile information  been submitted	</strong>									
						</div>');

            redirect('/profile/', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                A project with the same name exists	</strong>									
						</div>');
            redirect('/profile', 'refresh');
        }
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->MD->get('id', $id, 'profile');

        if ($query) {
            $data['profile'] = $query;
        } else {
            $data['profile'] = array();
        }

        $this->load->view('admin/edit-profile', $data);
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');

        // function update($id, $data,$table)
        $profile = array('title' => $title, 'description' => $description);
        $this->MD->update($id, $profile, 'profile');
        $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>
                                                  Information updated	</strong>									
						</div>');

        redirect('/profile/edit/' . $id, 'refresh');
        return;
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $this->MD->remove_table($id, 'profile', 'image');
        //delete($id,$table);
        //remove($id,$table,$column)

        $query = $this->MD->delete($id, 'profile');

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
