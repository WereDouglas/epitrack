<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {

        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }
        $query = $this->Md->show('chat');

        //  var_dump($query);
        if ($query) {
            $data['chats'] = $query;
        } else {
            $data['chats'] = array();
        }
        $this->load->view('management-home', $data);
    }

    public function news() {
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
        $query = $this->Md->query("SELECT * FROM student where status = 'false'");
        //  var_dump($query);
        if ($query) {
            $data['student_cnt_false'] = $query;
        } else {
            $data['student_cnt_false'] = array();
        }
         
                        $query = $this->Md->query("SELECT * FROM publication where verified = 'no'");
                        //  var_dump($query);
                        if ($query) {
                            $data['publication_cnt_review'] = $query;
                        } else {
                            $data['publication_cnt_review'] = array();
                        }
                        $query = $this->Md->query("SELECT * FROM publication where accepted = 'no'");
                        //  var_dump($query);
                        if ($query) {
                            $data['publication_cnt_accepted'] = $query;
                        } else {
                            $data['publication_cnt_accepted'] = array();
                        }
                         $query = $this->Md->query("SELECT * FROM presentation where accepted = 'no'");
                        //  var_dump($query);
                        if ($query) {
                            $data['present_cnt_accepted'] = $query;
                        } else {
                            $data['present_cnt_accepted'] = array();
                        }


        $this->load->view('blank', $data);
    }

    public function tracks() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') == 2) {
                $query = $this->Md->delete($id, 'track');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 track deleted	</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action' . $this->session->userdata('level') . '	</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            }
        }
        if ($action == 'update') {
            if ($this->session->userdata('level') == 2) {
                $this->load->helper(array('form', 'url'));

                $track = $this->input->post('track');
                $id = $this->input->post('id');
                $track = array('track' => $track);
                $this->Md->update($id, $track, 'track');
            }
        }


        $this->load->helper(array('form', 'url'));

        $track = $this->input->post('track');
        if ($track != "") {
            $get_result = $this->Md->check($track, 'track', 'track');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 track already registered	</strong>									
						</div>');
                redirect('/management/tracks', 'refresh');
            }
            $tracks = array('track' => $track, 'created' => date('Y-m-d'));
            if ($this->session->userdata('level') == 2) {
                $this->Md->save($tracks, 'track');
                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 track saved</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot  carry out this action</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            }
        } else {
            $query = $this->Md->show('track');
            //  var_dump($query);
            if ($query) {
                $data['tracks'] = $query;
            } else {
                $data['tracks'] = array();
            }

            $this->load->view('tracks', $data);
        }
    }

    public function cohort() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            if ($this->session->userdata('level') > 0) {
                $id = $this->uri->segment(4);
                $query = $this->Md->delete($id, 'cohort');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Cohort deleted	</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            }
        }
        if ($action == 'update') {
            if ($this->session->userdata('level') > 0) {
                $this->load->helper(array('form', 'url'));

                $name = $this->input->post('name');
                $id = $this->input->post('id');


                $cohort = array('name' => $name);
                $this->Md->update($id, $cohort, 'cohort');
            }
        }


        $this->load->helper(array('form', 'url'));

        $name = $this->input->post('name');
        if ($name != "") {
            $track = $this->input->post('track');
            $startyear = $this->input->post('years');

            $get_result = $this->Md->check($name, 'name', 'cohort');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 cohort already registered	</strong>									
						</div>');
                redirect('/management/cohort', 'refresh');
            }
            $cohort = array('name' => $name, 'track' => $track, 'year' => $startyear, 'created' => date('Y-m-d'));
            if ($this->session->userdata('level') > 0) {
                $this->Md->save($cohort, 'cohort');
                $this->session->set_flashdata('msg', '<div class="alert alert-success">                               
                                                <strong>
                                                 cohort saved</strong>									
						</div>');
                $message = "New cohort " . $name . " " . "has been created with " . $track . " on" . date('Y-m-d');
                $subject = "Cohort creation";
                $result = $query = $this->Md->show('user');
                foreach ($result as $res) {
                    $this->sendEmail($message, $res->email, $subject);
                }

                redirect('/management/cohort', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/cohort', 'refresh');
            }
        } else {
            $query = $this->Md->show('cohort');
            //  var_dump($query);
            if ($query) {
                $data['cohorts'] = $query;
            } else {
                $data['cohorts'] = array();
            }
            $query = $this->Md->show('track');
            //  var_dump($query);
            if ($query) {
                $data['tracks'] = $query;
            } else {
                $data['tracks'] = array();
            }

            $this->load->view('cohort', $data);
        }
    }

    public function sendEmail($message, $to, $subject) {

        $this->load->helper(array('form', 'url'));

        $name = $this->session->userdata('name');
        $email = $this->session->userdata('email');
        $description = ($this->input->post('description'));

        $message = $message;

        echo $message;

        $this->load->library('email');

        $config['wordwrap'] = TRUE;
        $config['charset'] = 'iso-8859-1';


        $this->email->initialize($config);

        $this->email->from($email, $name);
        //$this->email->to('info@solarnow.eu');
        $this->email->to($to);
        $this->email->cc('weredouglas@gmail.com');
        $this->email->bcc('gatamamichael@gmail.com');
        $this->email->set_mailtype("html");

        $this->email->subject($subject . $name);
        $this->email->message($message);
        if ($name != "" || $email != "") {
            $this->email->send();
        }

        echo $this->email->print_debugger();

        $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                  
                                                <strong> Notifications sent</strong>									
						</div>');
    }

    public function reports() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);



        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }
        $query = $this->Md->show('track');
        //  var_dump($query);
        if ($query) {
            $data['tracks'] = $query;
        } else {
            $data['tracks'] = array();
        }

        $this->load->view('report', $data);
    }

    public function country_report() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);



        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }
        $query = $this->Md->show('track');
        //  var_dump($query);
        if ($query) {
            $data['tracks'] = $query;
        } else {
            $data['tracks'] = array();
        }

        $this->load->view('country-report', $data);
    }

    public function student() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') > 1) {
                $query = $this->Md->delete($id, 'student');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 student deleted	</strong>									
						</div>');

                redirect('/management/student', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/student', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $id = $this->input->post('id');
            $other = $this->input->post('other');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            $student = array('fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'contact' => $contact);
            $this->Md->update($id, $student, 'student');
        }


        $this->load->helper(array('form', 'url'));

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $password = $this->input->post('password1');


        if ($fname != "" && $lname != "") {


            $email = $this->input->post('email');
            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);

            $get_result = $this->Md->check($email, 'email', 'student');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Email already in use	</strong>									
						</div>');
                redirect('/management/student', 'refresh');
            }


            $file_element_name = 'userfile';



            $config['upload_path'] = 'uploads/';
            // $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                echo $msg = $this->upload->display_errors('', '');
            } else {

                $data = $this->upload->data();
                $other = $this->input->post('other');
                $gender = $this->input->post('gender');
                $dob = date('Y-m-d', strtotime($this->input->post('dob')));
                $country = $this->input->post('country');
                if ($this->session->userdata('level') == 1) {

                    $country = $this->session->userdata('country');
                }
                $contact = $this->input->post('contact');
                $cohort = $this->input->post('cohort');
                $submitted = date('Y-m-d');
                $file = $data['file_name'];
                $email = $this->input->post('email');

                $student = array('image' => $file, 'fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'country' => $country, 'password' => $password, 'contact' => $contact, 'cohort' => $cohort, 'submitted' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($student, 'student');
                ;
                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 information saved</strong>									
						</div>');

                redirect('/management/student', 'refresh');
            }
        }
        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }
        $query = $this->Md->show('track');
        //  var_dump($query);
        if ($query) {
            $data['tracks'] = $query;
        } else {
            $data['tracks'] = array();
        }
        $query = $this->Md->show('student');
        //  var_dump($query);
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }

        $this->load->view('add-student', $data);
    }

    public function country_student() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') > 0) {
                $query = $this->Md->delete($id, 'student');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 student deleted</strong>									
						</div>');

                redirect('/management/country_student', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/country_student', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $id = $this->input->post('id');
            $other = $this->input->post('other');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');

            $student = array('fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'contact' => $contact);
            $this->Md->update($id, $student, 'student');
        }


        $this->load->helper(array('form', 'url'));

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $password = $this->input->post('password1');


        if ($fname != "" && $lname != "") {


            $email = $this->input->post('email');
            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);

            $get_result = $this->Md->check($email, 'email', 'student');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Email already in use	</strong>									
						</div>');
                redirect('/management/country_student', 'refresh');
            }


            $file_element_name = 'userfile';



            $config['upload_path'] = 'uploads/';
            // $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                echo $msg = $this->upload->display_errors('', '');
            } else {

                $data = $this->upload->data();
                $other = $this->input->post('other');
                $gender = $this->input->post('gender');
                $dob = date('Y-m-d', strtotime($this->input->post('dob')));
                $country = $this->input->post('country');
                if ($this->session->userdata('level') == 1) {

                    $country = $this->session->userdata('country');
                }
                $contact = $this->input->post('contact');
                $cohort = $this->input->post('cohort');
                $submitted = date('Y-m-d');
                $file = $data['file_name'];
                $email = $this->input->post('email');
                if ($this->session->userdata('level') > 0) {
                    $student = array('image' => $file, 'fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'country' => $country, 'password' => $password, 'contact' => $contact, 'cohort' => $cohort, 'submitted' => date('Y-m-d H:i:s'), 'status' => 'false');
                    $file_id = $this->Md->save($student, 'student');

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 information saved</strong>									
						</div>');

                    redirect('/management/country_student', 'refresh');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                    redirect('/management/country_student', 'refresh');
                }
            }
        }
        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }
        $query = $this->Md->show('track');
        //  var_dump($query);
        if ($query) {
            $data['tracks'] = $query;
        } else {
            $data['tracks'] = array();
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['countries'] = $query;
        } else {
            $data['countries'] = array();
        }
        $query = $this->Md->show('student');
        //  var_dump($query);
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }

        $this->load->view('country-student', $data);
    }

    public function country() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') == 2) {

                $query = $this->Md->delete($id, 'country');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 country deleted	</strong>									
						</div>');

                redirect('/management/country', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/country', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $name = $this->input->post('name');

            $country = array('name' => $name);
            $this->Md->update($id, $country, 'country');
        }


        $name = $this->input->post('name');


        if ($name != "") {


            $get_result = $this->Md->check($name, 'name', 'country');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Country saved	</strong>									
						</div>');
                redirect('/management/country', 'refresh');
            }


            $file_element_name = 'userfile';



            $config['upload_path'] = 'flags/';
            // $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                echo $msg = $this->upload->display_errors('', '');
            } else {
                $data = $this->upload->data();
                $name = $this->input->post('name');

                $file = $data['file_name'];

                $country = array('image' => $file, 'name' => $name);
                $file_id = $this->Md->save($country, 'country');
                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 information saved</strong>									
						</div>');

                redirect('/management/country', 'refresh');
            }
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['countries'] = $query;
        } else {
            $data['countries'] = array();
        }

        $this->load->view('country', $data);
    }

    public function user() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') == 2) {
                $query = $this->Md->delete($id, 'user');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 user deleted	</strong>									
						</div>');

                redirect('/management/user', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $id = $this->input->post('id');
            $level = $this->input->post('level');

            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            if ($this->session->userdata('level') > 0) {
                $user = array('fname' => $fname, 'lname' => $lname, 'level' => $level, 'email' => $email, 'contact' => $contact, 'registered' => date('Y-m-d'), 'status' => 'active');
                $this->Md->update($id, $user, 'user');
            }
        }


        $this->load->helper(array('form', 'url'));

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $password = $this->input->post('password1');


        if ($fname != "" && $lname != "") {


            $email = $this->input->post('email');
            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);

            $get_result = $this->Md->check($email, 'email', 'user');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Email already in use	</strong>									
						</div>');
                redirect('/management/user', 'refresh');
            }

            $country = $this->input->post('country');
            if ($this->session->userdata('level') == 1) {

                $country = $this->session->userdata('country');
            }
            $contact = $this->input->post('contact');
            $level = $this->input->post('level');

            $submitted = date('Y-m-d');

            $email = $this->input->post('email');
            if ($this->session->userdata('level') > 0) {
                $user = array('fname' => $fname, 'lname' => $lname, 'level' => $level, 'email' => $email, 'country' => $country, 'password' => $password, 'contact' => $contact, 'registered' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($user, 'user');

                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 user information saved</strong>									
						</div>');

                redirect('/management/user', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/user', 'refresh');
            }
        }
        $query = $this->Md->show('user');
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['country'] = $query;
        } else {
            $data['country'] = array();
        }


        $this->load->view('user', $data);
    }

    public function activate_user() {
        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $actives = trim($this->input->post('actives'));
        if ($actives == "active") {
            $active = "false";
        }
        if ($actives == "false") {
            $active = "active";
        }

        if ($this->session->userdata('level') > 0) {
            $user = array('status' => $active);
            $this->Md->update($id, $user, 'user');
        }
    }

    public function activate_student() {

        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $actives = trim($this->input->post('actives'));
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

    public function country_user() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'user');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 user deleted	</strong>									
						</div>');

            redirect('/management/country_user', 'refresh');
        }


        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $id = $this->input->post('id');

            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            $user = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'contact' => $contact, 'registered' => date('Y-m-d'), 'status' => 'active');
            $this->Md->update($id, $user, 'user');
        }


        $this->load->helper(array('form', 'url'));

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $password = $this->input->post('password1');


        if ($fname != "" && $lname != "") {


            $email = $this->input->post('email');
            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);

            $get_result = $this->Md->check($email, 'email', 'user');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Email already in use	</strong>									
						</div>');
                redirect('/management/country_user', 'refresh');
            }

            $country = $this->input->post('country');
            $contact = $this->input->post('contact');
            $submitted = date('Y-m-d');

            $email = $this->input->post('email');
            if ($this->session->userdata('level') > 0) {
                $user = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'country' => $country, 'password' => $password, 'contact' => $contact, 'registered' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($user, 'user');

                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 user information saved</strong>									
						</div>');

                redirect('/management/country_user', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/country_user', 'refresh');
            }
        }
        $query = $this->Md->show('user');
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['country'] = $query;
        } else {
            $data['country'] = array();
        }


        $this->load->view('country-user', $data);
    }

    public function event() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'event');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 event deleted	</strong>									
						</div>');

            redirect('/management/event', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $country = $this->input->post('country');
            $id = $this->input->post('id');

            $startdate = $this->input->post('startdate');
            $enddate = $this->input->post('enddate');
            $postedby = 'test';
            $event = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'contact' => $contact, 'registered' => date('Y-m-d'), 'status' => 'active');
            $this->Md->update($id, $event, 'event');
        }


        $this->load->helper(array('form', 'url'));

        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $country = $this->input->post('country');
        $startdate = date('Y-m-d', strtotime($this->input->post('startdate')));
        $enddate = date('Y-m-d', strtotime($this->input->post('enddate')));
        $endtime = $this->input->post('endtime');
        $starttime = $this->input->post('starttime');

        $postedby = 'test';


        if ($title != "" && $startdate != "") {



            $event = array('title' => $title, 'description' => $description, 'country' => $country, 'startdate' => $startdate, 'enddate' => $enddate, 'starttime' => $starttime, 'endtime' => $endtime, 'posted' => $postedby, 'registered' => date('Y-m-d H:i:s'), 'status' => 'active');
            $file_id = $this->Md->save($event, 'event');
            ;
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 information saved</strong>									
						</div>');

            redirect('/management/event', 'refresh');
        }
        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }


        $this->load->view('event', $data);
    }

    public function advert() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'advert');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 advert deleted	</strong>									
						</div>');

            redirect('/management/advert', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $title = $this->input->post('title');

            $advert = array('title' => $title);
            $this->Md->update($id, $advert, 'advert');
        }


        $title = $this->input->post('title');


        if ($title != "") {
            $file_element_name = 'userfile';
            $config['upload_path'] = 'adverts/';
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

                $advert = array('image' => $file, 'title' => $title, 'submitted' => date('y-m-d'), 'status' => 'active');
                $file_id = $this->Md->save($advert, 'advert');
                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                advertisement information saved</strong>									
						</div>');

                redirect('/management/advert', 'refresh');
            }
        }
        $query = $this->Md->show('advert');
        //  var_dump($query);
        if ($query) {
            $data['adverts'] = $query;
        } else {
            $data['adverts'] = array();
        }

        $this->load->view('advert', $data);
    }

}
