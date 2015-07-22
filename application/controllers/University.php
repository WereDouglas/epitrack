<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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

        $query = $this->MD->show('service');
        if ($query) {
            $data['services'] = $query;
        } else {
            $data['services'] = array();
        }

        $this->load->view('admin/service', $data);
    }

   

    public function upload() {
        
        
        $this->load->helper(array('form', 'url'));

        $title = $this->input->post('title');
        $description = $this->input->post('description');     

        $get_result = $this->MD->check($title, 'title', 'service');
        if ($get_result) {
            
             if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName;
            move_uploaded_file($tempFile, $targetFile);
            
            $name= $fileName;            
          
            }  
            
            $service = array('title' => $title, 'description' => $description,'image'=>$name,'submitted' => date('Y-m-d H:m:s'));
            $this->MD->save($service, 'service');
            $this->session->set_flashdata('msg', '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  Project  been submitted	</strong>									
						</div>');

            redirect('/service/', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                A project with the same name exists	</strong>									
						</div>');
            redirect('/service', 'refresh');
        }
       
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->MD->get('id', $id, 'service');

        if ($query) {
            $data['service'] = $query;
        } else {
            $data['service'] = array();
        }      

        $this->load->view('admin/edit-service', $data);
    }

    public function update() {
        
        $this->load->helper(array('form', 'url'));
         $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
       
        
    // function update($id, $data,$table)
            $service = array('title' => $title, 'description' => $description);
            $this->MD->update($id,$service, 'service');
            $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>
                                                  Information updated	</strong>									
						</div>');

            redirect('/service/edit/'.$id, 'refresh');
            return;
       
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
         
           $this->MD->remove_table($id,'service','image');
           //delete($id,$table);
           //remove($id,$table,$column)
       
        $query = $this->MD->delete($id, 'service');
        
        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/project', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/project', 'refresh');
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
