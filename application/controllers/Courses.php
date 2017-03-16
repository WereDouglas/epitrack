<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        // $query = $this->MD->show('metar');
        //  var_dump($query);

        $query = $this->MD->show('project');
        if ($query) {
            $data['projects'] = $query;
        } else {
            $data['projects'] = array();
        }

        $this->load->view('admin/project', $data);
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $size = $this->input->post('size');
        $type = $this->input->post('type');
        $description = $this->input->post('description');
        $year = $this->input->post('year');

        $get_result = $this->MD->check($name, 'name', 'project');
        if ($get_result) {
            $project = array('name' => $name, 'location' => $location, 'size' => $size, 'type' => $type, 'year' => $year, 'description' => $description, 'active' => 'true', 'submit' => date('Y-m-d H:m:s'));
            $this->MD->save($project, 'project');
            $this->session->set_flashdata('msg', '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  Project submitted has already been submitted	</strong>									
						</div>');

            redirect('/project/', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                A project with the same name exists	</strong>									
						</div>');
            redirect('/project', 'refresh');
        }
    }

    public function upload() {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName;
            move_uploaded_file($tempFile, $targetFile);
            $id = $this->input->post('id');
// if you want to save in db,where here
// with out model just for example
// $this->load->database(); // load database
// $this->db->insert('file_table',array('file_name' => $fileName));
            $name = $fileName;
            $image = array('url' => $name, 'source' => 'project', 'sid' => $id);
            $this->MD->save($image, 'image');
            echo '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  Project submitted has already been submitted	</strong>									
						</div>';
        }
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->MD->get('id', $id, 'project');

        if ($query) {
            $data['project'] = $query;
        } else {
            $data['project'] = array();
        }
        $query = $this->MD->get('sid', $id, 'image');

        if ($query) {
            $data['images'] = $query;
        } else {
            $data['images'] = array();
        }

        $this->load->view('admin/edit-project', $data);
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $size = $this->input->post('size');
        $type = $this->input->post('type');
        $description = $this->input->post('description');
        $year = $this->input->post('year');
        // function update($id, $data,$table)
        $project = array('name' => $name, 'location' => $location, 'size' => $size, 'type' => $type, 'year' => $year, 'description' => $description, 'active' => 'true', 'submit' => date('Y-m-d H:m:s'));
        $this->MD->update($id, $project, 'project');
        $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>
                                                  Information updated	</strong>									
						</div>');

        redirect('/project/edit/' . $id, 'refresh');
        return;
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
                    $this->Md->update($user_id, $student, 'course');
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



        $results = $this->MD->query("SELECT * FROM image WHERE sid='" . $id . "'");
        // var_dump($result);

        foreach ($results as $res) {

            //remove($id,$table,$column)
            $this->MD->remove($res->id, 'image', 'url');
            //delete($id,$table);
            $this->MD->delete($res->id, 'image');
            // echo $res->id;
        }


        $query = $this->MD->delete($id, 'project');

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
        //remove($id,$table,$column)

        $query = $this->MD->remove($id, 'image', 'url');
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

    public function check($metar) {
        $this->load->helper(array('form', 'url'));

        $metar = ($metar == "") ? $this->input->post('name') : $metar;
        //check($value,$field,$table)
        $get_result = $this->MD->check($metar, 'name', 'metar');

        if (!$get_result)
            echo '<span style="color:#f00"> name already in use. </span>';
        else
            echo '<span style="color:#0c0"> name not in use</span>';
    }

}
