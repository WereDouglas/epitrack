<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $this->load->view('home');
    }

    public function register() {

        $this->load->view('login');
    }
 public function logout() {
          
     $this -> session -> sess_destroy();    
      redirect('welcome/register', 'refresh');
    
      }
    public function login() {
        $this->load->helper(array('form', 'url'));
        if ($this->session->userdata('name') != null) {
              $query = $this->MD->show('event');
                    //  var_dump($query);
                    if ($query) {
                        $data['events'] = $query;
                    } else {
                        $data['events'] = array();
                    }

            $this->load->view('private');
            return;
        }
       $user= $this->input->post('form-field-radio');

       if($user==""){
   $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                           please select the login in type</strong>									
						</div>');
   redirect('welcome/register', 'refresh');
       }
   
   if($user=='student'){
      
        $email = $this->input->post('email');
        $password_now = $this->input->post('password');
        $key = $email;


        $get_result = $this->MD->check($email, 'email', 'student');
        if (!$get_result) {
            //$this->session->set_flashdata('msg', 'Welcome'.$email);
            //get($field,$value,$table)
            $result = $this->MD->get('email', $email, 'student');
            // var_dump($result);
            foreach ($result as $res) {
                $key = $email;
                $password = $this->encrypt->decode($res->password, $key);

                if ($password_now == $password) {

                    $newdata = array(
                        'id' => $res->id,
                        'name' => $res->fname . ' ' . $res->lname . ' ' . $res->other,
                        'email' => $res->email,
                        'image' => $res->image,
                        'contact' => $res->contact,
                        'country' => $res->country,
                        'cohort' => $res->cohort,
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);

                    $query = $this->MD->show('event');
                    //  var_dump($query);
                    if ($query) {
                        $data['events'] = $query;
                    } else {
                        $data['events'] = array();
                    }

                    $this->load->view('private', $data);
                } else {
                   $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 invalid password for student</strong>									
						</div>');
                    redirect('welcome/register', 'refresh');
                }
            }
        } else {
           $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                            ! invalid user student	</strong>									
						</div>');
            redirect('welcome/register', 'refresh');
        }
   }
   
    if($user=='administrator'){
      
        $email = $this->input->post('email');
        $password_now = $this->input->post('password');
        $key = $email;


        $get_result = $this->MD->check($email, 'email', 'user');
        if (!$get_result) {
            //$this->session->set_flashdata('msg', 'Welcome'.$email);
            //get($field,$value,$table)
            $result = $this->MD->get('email', $email, 'user');
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
                         'status' => $res->status,                       
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($newdata);

                  
                    redirect('welcome/management/', 'refresh');
                } else {
                     $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                              ! invalid password	</strong>									
						</div>');
                    redirect('welcome/register', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                ! invalid administrative user	</strong>									
						</div>');
            redirect('welcome/register', 'refresh');
        }
   }
   
   
    }

    public function student() {
        $this->load->view('private');
    }

    public function management() {
        $this->load->view('management');
    }

    public function projects() {

        $query = $this->MD->show('project');
        if ($query) {
            $data['projects'] = $query;
        } else {
            $data['projects'] = array();
        }


        $this->load->view('projects', $data);
    }

    public function services() {

        $query = $this->MD->show('service');
        if ($query) {
            $data['services'] = $query;
        } else {
            $data['services'] = array();
        }
        $this->load->view('services', $data);
    }

    public function profile() {

        $query = $this->MD->show('profile');
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
