<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $this->load->view('login');
    }

    public function register() {

        $this->load->view('login');
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('welcome/register', 'refresh');
    }

    public function login() {


        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $password_now = $this->input->post('password');
        $key = $email;

        $get_student = $this->Md->check($email, 'email', 'student');
        $get_user = $this->Md->check($email, 'email', 'user');


        if (!$get_student || !$get_user) {
            if (count($get_student) > 0) {

                $result = $this->Md->get('email', $email, 'student');
                // var_dump($result);
                foreach ($result as $res) {
                    $key = $email;
                    $password = $this->encrypt->decode($res->password, $key);

                    if ($password_now == $password) {
                        $status = $res->status;
                        $newdata = array(
                            'id' => $res->id,
                            'name' => $res->fname . ' ' . $res->lname . ' ' . $res->other,
                            'email' => $res->email,
                            'image' => $res->image,
                            'contact' => $res->contact,
                            'country' => $res->country,
                            'cohort' => $res->cohort,
                            'level' => 'student',
                            'status' => $res->status,
                            'logged_in' => TRUE
                        );

                        $this->session->set_userdata($newdata);

                        $cty = $this->session->userdata('country');
                        $country = $this->Md->get('name', $cty, 'country');
                        foreach ($country as $res) {
                            $county = $res->image;
                        }
                        $this->session->set_userdata('flag', $county);

                        $name = $this->session->userdata('name');
                        $query = $this->Md->get('reciever', $name, 'chat');
                        //  var_dump($query);
                        if ($query) {
                            $data['chats'] = $query;
                        } else {
                            $data['chats'] = array();
                        }
                        $query = $this->Md->query("SELECT * FROM outbreak where country = '" . $cty . "'");
                        //  var_dump($query);
                        if ($query) {
                            $data['outbreaks'] = $query;
                        } else {
                            $data['outbreaks'] = array();
                        }

                        $query = $this->Md->query("SELECT * FROM publication where country = '" . $cty . "'");
                        //  var_dump($query);
                        if ($query) {
                            $data['pubs'] = $query;
                        } else {
                            $data['pubs'] = array();
                        }

                        $query = $this->Md->show('event');
                        //  var_dump($query);
                        if ($query) {
                            $data['events'] = $query;
                        } else {
                            $data['events'] = array();
                        }
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

                        $query = $this->Md->query("SELECT * FROM student where status = 'false' AND country = '".$this->session->userdata('country')."'");
                        //  var_dump($query);
                        if ($query) {
                            $data['student_cnt_false'] = $query;
                        } else {
                            $data['student_cnt_false'] = array();
                        }

                        $query = $this->Md->query("SELECT * FROM publication where verified = 'false' AND country = '".$this->session->userdata('country')."'");
                        //  var_dump($query);
                        if ($query) {
                            $data['publication_cnt_review'] = $query;
                        } else {
                            $data['publication_cnt_review'] = array();
                        }
                        $query = $this->Md->query("SELECT * FROM publication where accepted = 'no' AND country = '".$this->session->userdata('country')."'");
                        //  var_dump($query);
                        if ($query) {
                            $data['publication_cnt_accepted'] = $query;
                        } else {
                            $data['publication_cnt_accepted'] = array();
                        }

                        $query = $this->Md->query("SELECT * FROM presentation where accepted = 'no' AND country = '".$this->session->userdata('country')."'");
                        //  var_dump($query);
                        if ($query) {
                            $data['present_cnt_accepted'] = $query;
                        } else {
                            $data['present_cnt_accepted'] = array();
                        }
                        if ($status != 'false') {
                            
                            $this->load->view('center_page', $data);
                            
                        } else {
                            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                your account has not yet been activated</strong>									
						</div>');
                            redirect('welcome/register', 'refresh');
                        }
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 invalid password for student</strong>									
						</div>');
                        redirect('welcome/register', 'refresh');
                    }
                }
            }

            if (count($get_user) > 0) {
                $get_result = $this->Md->check($email, 'email', 'user');
                if (!$get_result) {
                    //$this->session->set_flashdata('msg', 'Welcome'.$email);
                    //get($field,$value,$table)
                    $result = $this->Md->get('email', $email, 'user');
                    // var_dump($result);
                    foreach ($result as $res) {
                        $key = $email;
                        $password = $this->encrypt->decode($res->password, $key);

                        if ($password_now == $password) {

                            $newdata = array(
                                'id' => $res->id,
                                'name' => $res->fname . ' ' . $res->lname . ' ',
                                'email' => $res->email,
                                'contact' => $res->contact,
                                'country' => $res->country,
                                'image' => $res->image,
                                'status' => $res->status,
                                'level' => $res->level,
                                'logged_in' => TRUE
                            );
                            $this->session->set_userdata($newdata);

                            if ($this->session->userdata('level') > 0) {
                                $cty = $this->session->userdata('country');
                                $country = $this->Md->get('name', $cty, 'country');
                                foreach ($country as $res) {
                                    $county = $res->image;
                                }
                                $this->session->set_userdata('flag', $county);

                                redirect('welcome/management/', 'refresh');
                                return;
                            }


                            redirect('welcome/management/', 'refresh');
                        } else {
                            $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>! invalid password</strong></div>');
                            redirect('welcome/register', 'refresh');
                        }
                    }
                }
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">  <strong>  ! invalid login credentials</div>');
            redirect('welcome/register', 'refresh');
        }
    }

    public function student() {
        $this->load->view('private');
    }

    public function management() {

        $cty = $this->session->userdata('country');

        $name = $this->session->userdata('name');
        $query = $this->Md->get('reciever', $name, 'chat');
        //  var_dump($query);
        if ($query) {
            $data['chats'] = $query;
        } else {
            $data['chats'] = array();
        }
        $query = $this->Md->query("SELECT * FROM outbreak where country = '" . $cty . "'");
        //  var_dump($query);
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $query = $this->Md->query("SELECT * FROM publication where country = '" . $cty . "'");
        //  var_dump($query);
        if ($query) {
            $data['pubs'] = $query;
        } else {
            $data['pubs'] = array();
        }
        $query = $this->Md->query("SELECT * FROM student where status = 'false' AND country = '".$this->session->userdata('country')."'");
        //  var_dump($query);
        if ($query) {
            $data['student_cnt_false'] = $query;
        } else {
            $data['student_cnt_false'] = array();
        }

        $query = $this->Md->query("SELECT * FROM publication where verified = 'false' AND country = '".$this->session->userdata('country')."'");
        //  var_dump($query);
        if ($query) {
            $data['publication_cnt_review'] = $query;
        } else {
            $data['publication_cnt_review'] = array();
        }
        $query = $this->Md->query("SELECT * FROM publication where accepted = 'no' AND country = '".$this->session->userdata('country')."'");
        //  var_dump($query);
        if ($query) {
            $data['publication_cnt_accepted'] = $query;
        } else {
            $data['publication_cnt_accepted'] = array();
        }

        $query = $this->Md->query("SELECT * FROM presentation where accepted = 'no' AND country = '".$this->session->userdata('country')."'");
        //  var_dump($query);
        if ($query) {
            $data['present_cnt_accepted'] = $query;
        } else {
            $data['present_cnt_accepted'] = array();
        }


        $this->load->view('center_page', $data);
    }

    public function projects() {

        $query = $this->Md->show('project');
        if ($query) {
            $data['projects'] = $query;
        } else {
            $data['projects'] = array();
        }


        $this->load->view('projects', $data);
    }

    public function services() {

        $query = $this->Md->show('service');
        if ($query) {
            $data['services'] = $query;
        } else {
            $data['services'] = array();
        }
        $this->load->view('services', $data);
    }

    public function profile() {

        $query = $this->Md->show('profile');
        if ($query) {
            $data['profiles'] = $query;
        } else {
            $data['profiles'] = array();
        }
        $this->load->view('profile', $data);
    }

    public function contact() {
        $this->load->view('contact');
    }

    public function project() {
        $this->load->view('project');
    }

}
