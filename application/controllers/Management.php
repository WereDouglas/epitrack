<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        
        if ($this->session->userdata('name') == "") {
            $this->session->sess_destroy();
            redirect('welcome/logout', 'refresh');
            return;
        }

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

    public function qualifications() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);

        $query = $this->Md->query("SELECT *,qualification.id AS id FROM qualification INNER JOIN student ON qualification.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['qualifications'] = $query;
        } else {
            $data['qualifications'] = array();
        }

        if ($this->session->userdata('level') == 1) {


            $query = $this->Md->query("SELECT *,qualification.id AS id FROM qualification INNER JOIN student ON qualification.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['qualifications'] = $query;
            } else {
                $data['qualifications'] = array();
            }
        }

        $this->load->view('view-qualifications', $data);
    }

    public function emps() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);


        $query = $this->Md->query("SELECT * ,employment.id AS id FROM employment INNER JOIN student ON employment.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['records'] = $query;
        } else {
            $data['records'] = array();
        }
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT *,employment.id AS id FROM employment INNER JOIN student ON employment.studentID=student.id ORDER BY student.fname");
            if ($query) {
                $data['records'] = $query;
            } else {
                $data['records'] = array();
            }
        }
        $this->load->view('view-employement', $data);
    }

    public function surveillance() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);

        $query = $this->Md->query("SELECT *,surveillance.status AS status,surveillance.id AS id FROM surveillance INNER JOIN student ON surveillance.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['survey'] = $query;
        } else {
            $data['survey'] = array();
        }
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT *,surveillance.status AS status,surveillance.id AS id FROM surveillance INNER JOIN student ON surveillance.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['survey'] = $query;
            } else {
                $data['survey'] = array();
            }
        }
        $this->load->view('view-surveillance', $data);
    }

    public function outbreaks() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);
        $query = $this->Md->query("SELECT *,outbreak.status AS status,outbreak.id AS id FROM outbreak INNER JOIN student ON outbreak.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['out'] = $query;
        } else {
            $data['out'] = array();
        }
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT *,outbreak.status AS status,outbreak.id AS id FROM outbreak INNER JOIN student ON outbreak.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['out'] = $query;
            } else {
                $data['out'] = array();
            }
        }
        $this->load->view('view-outbreaks', $data);
    }

    public function presentations() {
        //get($field,$value,$table)


        $query = $this->Md->query("SELECT * ,presentation.id AS id FROM presentation INNER JOIN student ON presentation.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['presentations'] = $query;
        } else {
            $data['presentations'] = array();
        }

        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT * ,presentation.id AS id FROM presentation INNER JOIN student ON presentation.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['presentations'] = $query;
            } else {
                $data['presentations'] = array();
            }
        }

        $this->load->view('view-presentations', $data);
    }

    public function publications() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);
        $query = $this->Md->query("SELECT *,publication.id AS id FROM publication INNER JOIN student ON publication.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['publications'] = $query;
        } else {
            $data['publications'] = array();
        }
        if ($this->session->userdata('level') == 1) {

            $query = $this->Md->query("SELECT *,publication.id AS id FROM publication INNER JOIN student ON publication.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['publications'] = $query;
            } else {
                $data['publications'] = array();
            }
        }
        $this->load->view('view-publications', $data);
    }

    public function studies() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);
        $query = $this->Md->query("SELECT * FROM study INNER JOIN student ON study.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['study'] = $query;
        } else {
            $data['study'] = array();
        }
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT * FROM study INNER JOIN student ON study.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['study'] = $query;
            } else {
                $data['study'] = array();
            }
        }
        $this->load->view('view-studies', $data);
    }

    public function courses() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);
        $query = $this->Md->query("SELECT * FROM course INNER JOIN student ON course.studentID=student.id WHERE student.country= '" . $this->session->userdata('country') . "' ORDER BY student.fname");
        if ($query) {
            $data['outs'] = $query;
        } else {
            $data['outs'] = array();
        }
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->query("SELECT * FROM course INNER JOIN student ON course.studentID=student.id  ORDER BY student.fname");
            if ($query) {
                $data['outs'] = $query;
            } else {
                $data['outs'] = array();
            }
        }
        $this->load->view('view-courses', $data);
    }

    public function news() {

        $cty = $this->session->userdata('country');
        $name = $this->session->userdata('name');
        $id = $this->session->userdata('id');

        if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) {

            $query = $this->Md->get('reciever', $name, 'chat');
            //  var_dump($query);
            if ($query) {
                $data['chats'] = $query;
            } else {
                $data['chats'] = array();
            }
            $query = $this->Md->query("SELECT * FROM fields INNER JOIN student ON fields.studentID = student.id where location = '" . $cty . "' ORDER BY fields.id ASC LIMIT 10");
            //  var_dump($query);
            if ($query) {
                $data['fields'] = $query;
            } else {
                $data['fields'] = array();
            }

            $query = $this->Md->query("SELECT * FROM outbreak where country = '" . $cty . "' AND confirm ='no'");
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

            $query = $this->Md->query("SELECT * FROM publication where verified = 'false'");
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
        }
        if ($this->session->userdata('level') == "student") {

            $query = $this->Md->query("SELECT * FROM outbreak where country = '" . $cty . "' AND studentID='" . $this->session->userdata('id') . "'");
            //  var_dump($query);
            if ($query) {
                $data['outbreaks'] = $query;
            } else {
                $data['outbreaks'] = array();
            }

            $query = $this->Md->show('event');
            //  var_dump($query);
            if ($query) {
                $data['events'] = $query;
            } else {
                $data['events'] = array();
            }
            $query = $this->Md->query("SELECT * FROM publication where country = '" . $cty . "' AND studentID='" . $this->session->userdata('id') . "'");
            //  var_dump($query);
            if ($query) {
                $data['pubs'] = $query;
            } else {
                $data['pubs'] = array();
            }


            $query = $this->Md->query("SELECT * FROM publication where verified = 'false' AND studentID='" . $this->session->userdata('id') . "'");
            //  var_dump($query);
            if ($query) {
                $data['publication_cnt_review'] = $query;
            } else {
                $data['publication_cnt_review'] = array();
            }
            $query = $this->Md->query("SELECT * FROM publication where accepted = 'no' AND studentID='" . $this->session->userdata('id') . "'");
            //  var_dump($query);
            if ($query) {
                $data['publication_cnt_accepted'] = $query;
            } else {
                $data['publication_cnt_accepted'] = array();
            }
            $query = $this->Md->query("SELECT * FROM presentation where accepted = 'no' AND studentID='" . $this->session->userdata('id') . "'");
            //  var_dump($query);
            if ($query) {
                $data['present_cnt_accepted'] = $query;
            } else {
                $data['present_cnt_accepted'] = array();
            }
        }
//echo $this->session->userdata('level');
        $this->load->view('blank', $data);
    }

    public function tracks() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            if ($this->session->userdata('level') == 1) {
                $query = $this->Md->delete($id, 'track');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 track deleted	</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action ' . '	</strong>									
						</div>');

                redirect('/management/tracks', 'refresh');
            }
        }
        if ($action == 'update') {
            if ($this->session->userdata('level') == 1) {
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
            if ($this->session->userdata('level') == 1) {
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
            if ($this->session->userdata('level') == 1) {
                $id = $this->uri->segment(4);
                $query = $this->Md->delete($id, 'cohort');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Cohort deleted	</strong>									
						</div>');

                redirect('/management/cohort', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/cohort', 'refresh');
            }
        }
        if ($action == 'update') {
            if ($this->session->userdata('level') == 1) {
                $this->load->helper(array('form', 'url'));

                $name = $this->input->post('name');
                $id = $this->input->post('id');
                $cohort = array('name' => $name);
                $this->Md->update($id, $cohort, 'cohort');
                //redirect('/management/cohort', 'refresh');
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
            $cohort = array('name' => $name, 'track' => $track, 'year' => $startyear, 'end' => $this->input->post('end'), 'country' => $this->input->post('country'), 'created' => date('Y-m-d'));
            if ($this->session->userdata('level') == 1) {
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
        $this->load->library('email');
        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        $body = $fname . ' ' . $lname . ' Welcome to the AFENET EPITRACK SYSTEM' . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";

        $from = "noreply@afenet.net";
        $subject = "Registration";
        if ($email != "") {

            $this->email->from($from, 'AFENET Epitrack system');
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($body);
            $this->email->send();
            echo $this->email->print_debugger();
            echo "email has been sent";
            //return;
        }

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
                $student = array('image' => $file, 'country' => $country, 'fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'country' => $country, 'password' => $password, 'contact' => $contact, 'cohort' => $cohort, 'submitted' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($student, 'student');

                $body = $fname . ' ' . $lname . ' welcome to the AFENET EPITRACK SYSTEM' . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";

                $from = "noreply@afenet.net";
                $subject = "Registration";
                if ($email != "") {

                    $this->email->from($from, 'AFENET Epitrack system');
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $this->email->message($body);
                    $this->email->send();
                    echo $this->email->print_debugger();
                    echo "email has been sent";
                    //return;
                }

                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                               Student  information saved email sent</strong>									
						</div>');

                redirect('/management/country_student', 'refresh');
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
        $this->load->library('email');

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

        if ($this->input->post('password1') == "") {
            $password = $this->generateRandomString();
            ;
        } else {
            $password = $this->input->post('password1');
        }


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
            $this->upload->do_upload($file_element_name);
            $status = 'error';
            echo $msg = $this->upload->display_errors('', '');

            $data = $this->upload->data();
            $other = $this->input->post('other');
            $gender = $this->input->post('gender');
            $dob = date('Y-m-d', strtotime($this->input->post('dob')));
            $country = $this->input->post('country');
            if ($this->input->post('country') == "") {

                $country = $this->session->userdata('country');
            }
            $contact = $this->input->post('contact');
            $cohort = $this->input->post('cohort');
            $submitted = date('Y-m-d');
            $file = $data['file_name'];
            $email = $this->input->post('email');
            if ($this->session->userdata('level') > 0) {

                $student = array('country' => $country, 'image' => $file, 'fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'country' => $country, 'password' => $password, 'contact' => $contact, 'cohort' => $cohort, 'submitted' => date('Y-m-d H:i:s'), 'status' => 'false', 'complete' => $this->input->post('complete'), 'supervisor' => $this->input->post('supervisor'), 'date_complete' => $this->input->post('date_complete'), 'comments' => $this->input->post('comment'));
                $file_id = $this->Md->save($student, 'student');

                $body = $fname . ' ' . $lname . ' Welcome to the AFENET EPITRACK SYSTEM' . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/" . '<br> Your password is ' . $password . ' ';
                $from = "noreply@afenet.net";
                $subject = "Registration";
                if ($email != "") {
                    $this->email->from($from, 'AFENET Epitrack system');
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $this->email->message($body);
                    $this->email->send();
                    echo $this->email->print_debugger();
                    echo "email has been sent";
                    //return;
                }

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
        if ($this->session->userdata('level') == 1) {
            $query = $this->Md->show('student');

            //  var_dump($query);
            if ($query) {
                $data['students'] = $query;
            } else {
                $data['students'] = array();
            }
        } elseif ($this->session->userdata('level') == 2) {
            $query = $this->Md->get('country', $this->session->userdata('country'), 'student');
            //  var_dump($query);
            if ($query) {
                $data['students'] = $query;
            } else {
                $data['students'] = array();
            }
        }
        $this->load->view('country-student', $data);
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

    public function download() {

        $files = $this->input->post('files');
        foreach ($files as $t) {

            echo base_url() . "publications/" . $t . '<br>';
            $file = base_url() . "publications/" . $t;

            if (!$file) { // file does not exist
                die('file not found');
            } else {
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$file");
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");

                // read the file from disk
                readfile($file);
            }
        }
    }

    public function details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);
        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }

        if ($this->session->userdata('level') > 0) {
            $query = $this->Md->get('id', $ID, 'user');
            //  var_dump($query);
            if ($query) {
                $data['bio'] = $query;
            } else {
                $data['bio'] = array();
            }
        }

        if ($this->session->userdata('level') == "student") {
            $query = $this->Md->get('id', $ID, 'student');
            //  var_dump($query);
            if ($query) {
                $data['bio'] = $query;
            } else {
                $data['bio'] = array();
            }
        }



        $this->load->view('user-details', $data);
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
        $this->load->library('email');

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
            $role = $this->input->post('role');

            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            if ($this->session->userdata('level') > 0) {
                $user = array('fname' => $fname, 'lname' => $lname, 'role' => $role, 'level' => $level, 'email' => $email, 'contact' => $contact, 'registered' => date('Y-m-d'), 'status' => 'active');
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

                $body = $fname . ' ' . $lname . ' welcome to the AFENET EPITRACK SYSTEM' . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";
                $email = $email;
                $from = "noreply@afenet.net";
                $subject = "Registration";
                if ($email != "") {

                    $this->email->from($from, 'AFENET Epitrack system');
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $this->email->message($body);
                    $this->email->send();
                    echo $this->email->print_debugger();
                    echo "email has been sent";
                    //return;
                }

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
        $this->load->view('country-user', $data);
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

        $this->load->library('email');
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

            if ($this->session->userdata('level') > 0) {
                $user = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'country' => $country, 'password' => $password, 'contact' => $contact, 'registered' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($user, 'user');
                // $this->load->library('email');
                $today = date('Y-m-d');
                $body = $fname . ' ' . $lname . ' welcome to the AFENET EPITRACK SYSTEM' . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";
                $email = $email;
                $from = "noreply@afenet.net";
                $subject = "Registration";
                if ($email != "") {

                    $this->email->from($from, 'AFENET Epitrack system');
                    $this->email->to($email);
                    $this->email->subject($subject);
                    $this->email->message($body);
                    $this->email->send();
                    echo $this->email->print_debugger();
                    echo "email has been sent";
                    //return;
                }
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
        $query = $this->Md->show('roles');
        //  var_dump($query);
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
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

    public function cohort_updater() {

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
                    $this->Md->update($user_id, $student, 'cohort');
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }

}
