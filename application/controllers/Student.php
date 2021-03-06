<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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

    public function updating() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $gender = $this->input->post('gender');
        $user = array('role' => $gender);
        $this->Md->update($id, $user, 'user');
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
                    $this->Md->update($user_id, $student, 'student');
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }

    public function register() {


        $this->load->view('student');
    }

    public function bio() {
        //get($field,$value,$table)
        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }
        $studentID = $this->session->userdata('id');
        $query = $this->Md->get('id', $studentID, 'student');
        //  var_dump($query);
        if ($query) {
            $data['bio'] = $query;
        } else {
            $data['bio'] = array();
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['countries'] = $query;
        } else {
            $data['countries'] = array();
        }
        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }

        $this->load->view('student-profile', $data);
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

    public function reset() {

        $this->load->library('email');
        $password = $this->generateRandomString();
        //$password = '123456';
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $email = $this->Md->query_cell("SELECT email FROM student WHERE id ='" . $id . "'", 'email');
        $name = $this->Md->query_cell("SELECT fname FROM student WHERE id ='" . $id . "'", 'fname');

        $new_password = $this->encrypt->encode($password, $email);

        $info = array('password' => $new_password);
        $this->Md->update_dynamic($id, 'id', 'student', $info);

        $body = $name . '  ' . ' Your password has been reset to ' . $password . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";

        $from = "noreply@afenet.net";
        $subject = "Password reset ";
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

        echo 'INFORMATION UPDATED';
    }

    public function update_image() {

        $this->load->helper(array('form', 'url'));
        //user information

        $userID = $this->input->post('userID');
        $namer = $this->input->post('namer');

        $file_element_name = 'userfile';
        // $new_name = $userID;
        $config['file_name'] = $userID;
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        $config['allowed_types'] = 'jpg';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
            $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
            redirect('/student/bio/' . $namer, 'refresh');

            return;
        }
        $data = $this->upload->data();
        $userfile = $data['file_name'];
        $user = array('image' => $userfile);
        $this->Md->update_dynamic($userID, 'id', 'student', $user);

        $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Image updated saved</strong></div>');

        redirect('/student/bio/' . $namer, 'refresh');
    }

    public function update_password() {

        $this->load->helper(array('form', 'url'));
        //user information



        $this->load->library('email');
        $password = $this->input->post('password');
        //$password = '123456';
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('userID');
        $email = $this->Md->query_cell("SELECT email FROM student WHERE id ='" . $id . "'", 'email');
        $name = $this->Md->query_cell("SELECT fname FROM student WHERE id ='" . $id . "'", 'fname');

        $new_password = $this->encrypt->encode($password, $email);

        $info = array('password' => $new_password);
        $this->Md->update_dynamic($id, 'id', 'student', $info);

        $body = $name . '  ' . ' Your password has been reset to ' . $password . " Please click the link below to access your epitrack account 199.231.187.134:8080/epitrack-master/";

        $from = "noreply@afenet.net";
        $subject = "Password reset ";
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

        echo 'INFORMATION UPDATED';
    }

    public function details() {
        //get($field,$value,$table)

        $studentID = $this->uri->segment(3);
        $query = $this->Md->show('event');
        //  var_dump($query);
        if ($query) {
            $data['events'] = $query;
        } else {
            $data['events'] = array();
        }

        $query = $this->Md->get('id', $studentID, 'student');
        //  var_dump($query);
        if ($query) {
            $data['bio'] = $query;
        } else {
            $data['bio'] = array();
        }
        $query = $this->Md->show('country');
        //  var_dump($query);
        if ($query) {
            $data['countries'] = $query;
        } else {
            $data['countries'] = array();
        }
        $query = $this->Md->show('cohort');
        //  var_dump($query);
        if ($query) {
            $data['cohorts'] = $query;
        } else {
            $data['cohorts'] = array();
        }
        $query = $this->Md->get('studentID', $studentID, 'qualification');
        if ($query) {
            $data['qualifications'] = $query;
        } else {
            $data['qualifications'] = array();
        }

        $query = $this->Md->get('studentID', $studentID, 'publication');
        if ($query) {
            $data['publications'] = $query;
        } else {
            $data['publications'] = array();
        }

        $query = $this->Md->get('studentID', $studentID, 'presentation');
        if ($query) {
            $data['presentations'] = $query;
        } else {
            $data['presentations'] = array();
        }
        $query = $this->Md->get('studentID', $studentID, 'employment');
        if ($query) {
            $data['records'] = $query;
        } else {
            $data['records'] = array();
        }
        $query = $this->Md->get('studentID', $studentID, 'surveillance');
        if ($query) {
            $data['survey'] = $query;
        } else {
            $data['survey'] = array();
        }
        $query = $this->Md->get('studentID', $studentID, 'outbreak');
        if ($query) {
            $data['out'] = $query;
        } else {
            $data['out'] = array();
        }

        $query = $this->Md->get('studentID', $studentID, 'course');
        if ($query) {
            $data['outs'] = $query;
        } else {
            $data['outs'] = array();
        }

        $query = $this->Md->get('studentID', $studentID, 'study');
        if ($query) {
            $data['study'] = $query;
        } else {
            $data['study'] = array();
        }



        $this->load->view('student-details', $data);
    }

    public function publicationed() {
        //get($field,$value,$table)

        $publicationID = $this->uri->segment(3);

        $query = $this->Md->get('id', $publicationID, 'publication');
        if ($query) {
            $data['publications'] = $query;
        } else {
            $data['publications'] = array();
        }

        $this->load->view('publication-details', $data);
    }

    public function outbreak_details() {
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

    public function course_details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);

        $query = $this->Md->get('id', $ID, 'course');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $this->load->view('course-details', $data);
    }

    public function field_details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);

        $query = $this->Md->get('id', $ID, 'fields');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $this->load->view('field-details', $data);
    }

    public function presentation_details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);

        $query = $this->Md->get('id', $ID, 'presentation');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $this->load->view('presentation-details', $data);
    }

    public function study_details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);

        $query = $this->Md->get('id', $ID, 'study');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $this->load->view('study-details', $data);
    }

    public function surveillance_details() {
        //get($field,$value,$table)

        $ID = $this->uri->segment(3);

        $query = $this->Md->get('id', $ID, 'surveillance');
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $this->load->view('surveillance-details', $data);
    }

    public function contact() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'contact');
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

            $contact = array('contact' => $contact, 'type' => $this->input->post('type'));
            $this->Md->update($id, $contact, 'contact');
        }


        $this->load->helper(array('form', 'url'));

        $contact = $this->input->post('contact');
        if ($contact != "") {
            $type = $this->input->post('type');

            $get_result = $this->Md->check($contact, 'contact', 'contact');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 This contact is already in use</strong>									
						</div>');
                redirect('/student/contact', 'refresh');
            }

            $contact = array('contact' => $contact, 'studentID' => $studentID, 'type' => $type, 'created' => date('Y-m-d'));
            $this->Md->save($contact, 'contact');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 contact saved</strong>									
						</div>');

            redirect('/student/contact', 'refresh');
        } else {
            //$query = $this->Md->get('id', $id, 'profile');
            $query = $this->Md->get('studentID', $studentID, 'contact');
            //  var_dump($query);
            if ($query) {
                $data['contacts'] = $query;
            } else {
                $data['contacts'] = array();
            }
            $query = $this->Md->show('track');
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
        $studentID = $this->session->userdata('id');
        $id = $this->uri->segment(4);

        if ($action == 'delete') {
            if ($this->session->userdata('level') == 2) {
                $query = $this->Md->delete($id, 'employment');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 employment record  deleted	</strong>									
						</div>');

                redirect('/student/employment', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                  Action pending review </strong>									
						</div>');
                $pd = array('user' => $this->session->userdata('name'), 'object' => 'employment', 'content' => ' ', 'action' => 'delete', 'oid' => $id, 'created' => date('Y-m-d H:i:s'), 'type' => 'student');
                $this->Md->save($pd, 'pending');

                $pd = array('visible' => 'f');
                $this->Md->update($id, $pd, 'employment');
                redirect('/student/employment', 'refresh');
            }
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

            $employment = array('organisation' => $organisation, 'location' => $location, 'position' => $position, 'country' => $country, 'sector' => $sector, 'contact' => $contact, 'startDate' => $this->input->post('startDate'), 'endDate' => $this->input->post('endDate'), 'created' => date('Y-m-d'));
            $this->Md->update($id, $employment, 'employment');
            //$content = json_encode($employment);
            // $pd = array('user' => $this->session->userdata('name'),'country' => $this->session->userdata('country'), 'object' => 'employment', 'content' => $content, 'action' => 'update', 'oid' => $id, 'created' => date('Y-m-d H:i:s'), 'type' => 'student');
            // $this->Md->save($pd, 'pending');
        }


        $organisation = $this->input->post('organisation');
        $position = $this->input->post('position');
        $country = $this->input->post('country');
        $location = $this->input->post('location');
        $sector = $this->input->post('sector');
        $contact = $this->input->post('contact');


        if ($this->input->post('organisation') != "" && $id == "") {
            echo $studentID;
            $employment = array('location' => $location, 'organisation' => $organisation, 'startDate' => $this->input->post('startDate'), 'endDate' => $this->input->post('endDate'), 'email' => $this->input->post('email'), 'studentID' => $studentID, 'position' => $position, 'country' => $country, 'sector' => $sector, 'contact' => $contact, 'created' => date('Y-m-d'), 'visible' => 't');
            $this->Md->save($employment, 'employment');


            //
            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Employment information saved</strong>									
						</div>');

            redirect('/student/employment', 'refresh');
        }
        $query = $this->Md->query("SELECT * FROM employment WHERE studentID ='" . $studentID . "'  AND (visible<>'f' OR visible IS NULL) ");

        //   $query = $this->Md->get('studentID', $studentID, 'employment');
        if ($query) {
            $data['records'] = $query;
        } else {
            $data['records'] = array();
        }

        $this->load->view('student-employment', $data);
    }

    public function sectors() {
        //SELECT name,cost FROM events GROUP BY name order by cost ASC
        $query = $this->Md->query("SELECT sector FROM employment GROUP BY sector order by sector ASC ");
        //$query = $this->Md->query("SELECT * FROM client");
        echo json_encode($query);
    }

    public function chat() {
        $this->load->helper(array('form', 'url'));
        //{reciever: reciever, message: message}
        $sender = $this->session->userdata('name');
        $receiver = $this->input->post('reciever');
        $message = $this->input->post('message');
        // echo $receiver.' ',$sender.''.$message;

        if ($sender != "" && $receiver != "") {
            $chat = array('sender' => $sender, 'reciever' => $receiver, 'message' => $message, 'datetimes' => date('Y-m-d H:i:s'));
            $this->Md->save($chat, 'chat');
            $get_result = $this->Md->get('reciever', $receiver, 'chat');
            if ($get_result) {

                if (is_array($get_result) && count($get_result)) {
                    foreach ($get_result as $loop) {

                        echo ' <div class="itemdiv dialogdiv">
                                        <div class="user">
                                           
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="blue">38 sec</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">' . $loop->reciever . '</a>
                                            </div>
                                            <div class="text">' . $loop->message . '</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only icon-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> ';
                    }
                }
            } else {

                echo ' no values ';
            }
        }
    }

    public function upload() {


        $this->load->helper(array('form', 'url'));

        $title = $this->input->post('title');
        $description = $this->input->post('description');

        $get_result = $this->Md->check($title, 'title', 'profile');
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
            $this->Md->save($profile, 'profile');
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


        $query = $this->Md->get('id', $id, 'profile');

        if ($query) {
            $data['profile'] = $query;
        } else {
            $data['profile'] = array();
        }

        $this->load->view('admin/edit-profile', $data);
    }

    public function publication() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'publication');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Publication deleted	</strong>									
						</div>');

            redirect('/student/publication', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));
            $id = $this->input->post('id');
            $pub = array('title' => $this->input->post('title'), 'link' => $this->input->post('link'), 'abstract' => $this->input->post('abstract'));
            $this->Md->update($id, $pub, 'publication');
            redirect('/student/publication', 'refresh');
            return;
        }


        $title = $this->input->post('title');
        $abstract = $this->input->post('abstract');
        $country = $this->input->post('country');
        $link = $this->input->post('link');
        $author = $this->input->post('author');



        if ($title != "") {
            
            $publication = array('author' => $author, 'title' => $title, 'dos' => date('y-m-d'), 'accepted' => 'no', 'verified' => 'false', 'status' => 'none', 'link' => $link, 'abstract' => $abstract, 'country' => $country, 'studentID' => $studentID);
            $file_id = $this->Md->save($publication, 'publication');
            $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>
                                              publication information saved</strong>									
						</div>');

            redirect('/student/publication', 'refresh');
        }
        $query = $this->Md->get('studentID', $studentID, 'publication');
        //  var_dump($query);
        if ($query) {
            $data['publications'] = $query;
        } else {
            $data['publications'] = array();
        }

        $this->load->view('student-publication', $data);
    }

    public function presentation() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');

        if ($action == 'delete') {
            if ($this->session->userdata('level') == 'student') {
                $id = $this->uri->segment(4);
                $query = $this->Md->delete($id, 'presentation');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 presentation deleted	</strong>									
						</div>');

                redirect('/student/presentation', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 You cannot carry out this action</strong>									
						</div>');

                redirect('/management/user', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));
            $id = $this->input->post('id');
            $presentation = array('presenter' => $this->input->post('presenter'), 'author' => $this->input->post('author'), 'eventName' => $this->input->post('eventName'), 'summary' => $this->input->post('summary'), 'title' => $this->input->post('title'), 'dos' => date('Y-m-d'), 'accepted' => $this->input->post('accepted'), 'country' => $this->input->post('country'), 'location' => $this->input->post('location'), 'eventType' => $this->input->post('eventType'), 'presentationType' => $this->input->post('presentationType'));
            $this->Md->update($id, $presentation, 'presentation');
            return;
        }


        $title = $this->input->post('title');
        $country = $this->input->post('country');
        $event = $this->input->post('eventName');
        $eventType = $this->input->post('eventType');
        $presentationType = $this->input->post('presentationType');
        $location = $this->input->post('location');
        $date = trim(date('d-m-Y', strtotime($this->input->post('date'))));
        $summary = $this->input->post('summary');
        $author = $this->input->post('author');


        if ($title != "") {
            $file_element_name = 'userfile';
            $config['upload_path'] = 'publications/';
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
                $presentation = array('file' => $file,'presenter'=>$this->input->post('presenter'), 'author' => $author, 'eventName' => $title, 'summary' => $summary, 'title' => $title, 'dos' => date('Y-m-d'), 'submissionDate' => date('Y-m-d'), 'date' => $date, 'accepted' => 'no', 'country' => $country, 'location' => $location, 'eventType' => $eventType, 'presentationType' => $presentationType, 'studentID' => $studentID);
                $file_id = $this->Md->save($presentation, 'presentation');
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>
                                              presentation information saved</strong>									
						</div>');

                redirect('/student/presentation', 'refresh');
            }
        }
        $query = $this->Md->get('studentID', $studentID, 'presentation');
        //  var_dump($query);
        if ($query) {
            $data['presentations'] = $query;
        } else {
            $data['presentations'] = array();
        }

        $this->load->view('student-presentation', $data);
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
        $active = "false";


        $table = $this->uri->segment(5);
        if ($actives == "true") {
            $active = "false";
        }
        if ($actives == "false") {
            $active = "true";
        }

        if ($this->session->userdata('level') > 0) {

            $qualif = array('verified' => $active);
            $this->Md->update($id, $qualif, $table);
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

    public function study() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');


        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'study');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 study record  deleted	</strong>									
						</div>');

            redirect('/student/study', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $position = $this->input->post('position');
            $id = $this->input->post('id');


            $study = array('name' => $this->input->post('name'), 'onset' => $this->input->post('onset'), 'dissemination' => $this->input->post('dissemination'), 'findings' => $this->input->post('finding'));
            $this->Md->update($id, $study, 'study');
            return;
        }


        $name = $this->input->post('name');
        $onset = strtotime($this->input->post('onset'));
        $dissemination = strtotime($this->input->post('dissemination'));
        $findings = $this->input->post('findings');

        if ($this->input->post('name') != "" && $studentID != "") {
            $study = array('name' => $name, 'studentID' => $studentID, 'onset' => $this->input->post('onset'), 'dissemination' => $this->input->post('dissemination'), 'findings' => $findings, 'dos' => date('Y-m-d'));
            $this->Md->save($study, 'study');

            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Study information saved</strong>									
						</div>');

            redirect('/student/study', 'refresh');
        }

        $query = $this->Md->get('studentID', $studentID, 'study');
        if ($query) {
            $data['study'] = $query;
        } else {
            $data['study'] = array();
        }


        $this->load->view('student-study', $data);
    }

    public function qualification() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');


        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'qualification');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Qualification record  deleted	</strong>									
						</div>');

            redirect('/student/qualification', 'refresh');
        }
        if ($action == 'update') {
            $this->load->helper(array('form', 'url'));
            $name = $this->input->post('name');
            $institute = $this->input->post('institute');

            $id = $this->input->post('id');
            $verified = 'False';
            $qualification = array('name' => $name, 'institute' => $institute, 'completion' => $this->input->post('completion'), 'graduation' => $this->input->post('graduation'), 'created' => date('Y-m-d'));
            $this->Md->update($id, $qualification, 'qualification');
            return;
        }


        $name = $this->input->post('name');
        $institute = $this->input->post('institute');
        $completion = $this->input->post('completion');
        $graduation = $this->input->post('graduation');
        $verified = 'False';

        if ($this->input->post('name') != "" && $studentID != "") {
            $qualification = array('name' => $name, 'verified' => $verified, 'studentID' => $studentID, 'institute' => $institute, 'completion' => $completion, 'graduation' => $graduation, 'created' => date('Y-m-d H:i:s'));
            $this->Md->save($qualification, 'qualification');

            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Qualification information saved</strong>									
						</div>');

            redirect('/student/qualification', 'refresh');
        }

        $query = $this->Md->get('studentID', $studentID, 'study');
        if ($query) {
            $data['study'] = $query;
        } else {
            $data['study'] = array();
        }

        $query = $this->Md->get('studentID', $studentID, 'qualification');
        // var_dump($query);
        if ($query) {
            $data['qualifications'] = $query;
        } else {
            $data['qualifications'] = array();
        }


        $this->load->view('student-qualification', $data);
    }

    public function surveillance() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');


        if ($action == 'delete') {
            if ($this->session->userdata('level') > 0) {
                $id = $this->uri->segment(4);
                $query = $this->Md->delete($id, 'surveillance');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                 employment record  deleted	</strong>									
						</div>');

                redirect('/student/surveillance', 'refresh');
            } else {
                $id = $this->uri->segment(4);
                $verified = 'delete';
                $survey = array('status' => $verified, 'created' => date('Y-m-d'));
                $this->Md->update($id, $survey, 'surveillance');

                redirect('/student/surveillance', 'refresh');
            }
        }
        if ($action == 'update') {
            $this->load->helper(array('form', 'url'));

          
            $type = $this->input->post('type');
           
            $finding = $this->input->post('finding');
            $id = $this->input->post('id');
            $verified = 'false';

            $survey = array('name' => $this->input->post('name'), 'location' => $this->input->post('location'), 'status' => 'update', 'type' => $type, 'finding' => $finding, 'verified' => $verified, 'created' => date('Y-m-d'));
            $this->Md->update($id, $survey, 'surveillance');
            return;
        }


        $name = $this->input->post('name');
        $type = $this->input->post('type');
        $region = $this->input->post('region');
        $location = $this->input->post('country');
        $date = $this->input->post('onset');
        $finding = $this->input->post('findings');
        $verified = 'false';

        if ($this->input->post('name') != "" && $studentID != "") {
            $surveillance = array('name' => $name, 'verified' => $verified, 'status' => 'none', 'studentID' => $studentID, 'type' => $type, 'region' => $region,'location'=>$location ,'finding' => $finding, 'date' => $date, 'created' => date('Y-m-d H:i:s'));
            $this->Md->save($surveillance, 'surveillance');

            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Surveillance information saved</strong>									
						</div>');

            redirect('/student/surveillance', 'refresh');
        }


        // $query = $this->Md->get('studentID', $studentID, 'surveillance');
        $query = $this->Md->query("SELECT * FROM surveillance WHERE studentID ='" . $studentID . "' AND status<>'delete' ");
        //  $query = $this->Md->get('studentID', $studentID, 'surveillance');
        // var_dump($query);
        if ($query) {
            $data['survey'] = $query;
        } else {
            $data['survey'] = array();
        }

        $this->load->view('student-surveillance', $data);
    }

    public function outbreak() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');


        if ($action == 'delete') {
            if ($this->session->userdata('level') > 0) {
                $id = $this->uri->segment(4);
                $query = $this->Md->delete($id, 'outbreak');
                $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                   
                                                <strong>
                                                record  deleted	</strong>									
						</div>');

                redirect('/student/outbreak', 'refresh');
            } else {
                $id = $this->uri->segment(4);
                $verified = 'delete';
                $out = array('status' => $verified);
                $this->Md->update($id, $out, 'outbreak');
                redirect('/student/outbreak', 'refresh');
            }
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));
            $id = $this->input->post('id');
            //  $student = array($field_name => $val,'status'=>'update','verified'=>'false');
            $out = array('name' => $this->input->post('name'), 'max' => $this->input->post('max'), 'min' => $this->input->post('min'), 'onset' => $this->input->post('onset'), 'dates' => $this->input->post('dates'), 'status' => 'update', 'verified' => 'false');
            $this->Md->update($id, $out, 'outbreak');
            return;
        }

        $name = $this->input->post('name');
        $country = $this->input->post('country');
        $region = $this->input->post('region');
        $min = $this->input->post('cases');
        $max = $this->input->post('deaths');
        $onset = $this->input->post('onset');
        $dates = $this->input->post('dates');
        $lab = $this->input->post('lab');
        $confirm = $this->input->post('confirm');

        $etiology = $this->input->post('etiology');
        $findings = $this->input->post('findings');

        if ($this->input->post('name') != "" && $studentID != "") {
            $outbreak = array('name' => $name, 'verified' => 'false', 'status' => 'none', 'studentID' => $studentID, 'onset' => $onset, 'country' => $country, 'max' => $max, 'min' => $min, 'dates' => $dates, 'lab' => $lab, 'confirm' => $confirm, 'etiology' => $etiology, 'region' => $region, 'findings' => $findings, 'dos' => date('Y-m-d'));
            $this->Md->save($outbreak, 'outbreak');

            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               outbreak information saved</strong>									
						</div>');

            redirect('/student/outbreak', 'refresh');
        }
        $query = $this->Md->query("SELECT * FROM outbreak WHERE studentID ='" . $studentID . "' AND status<>'delete' ORDER BY dos DESC ");

        // $query = $this->Md->get('studentID', $studentID, 'outbreak');
        if ($query) {
            $data['out'] = $query;
        } else {
            $data['out'] = array();
        }

        $this->load->view('outbreak', $data);
    }

    public function course() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);
        $studentID = $this->session->userdata('id');


        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->Md->delete($id, 'course');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Course record  deleted	</strong>									
						</div>');

            redirect('/student/course', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));
            $id = $this->input->post('id');
            $course = array('name' => $this->input->post('name'), 'start' => $this->input->post('start'), 'end' => $this->input->post('end'), 'participants' => $this->input->post('participants'), 'objective' => $this->input->post('objective'), 'role' => $this->input->post('role'), 'description' => $this->input->post('description'));
            $this->Md->update($id, $course, 'course');
            return;
        }

        $name = $this->input->post('name');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $participants = $this->input->post('participants');
        $objective = $this->input->post('objective');
        $role = $this->input->post('role');
        $description = $this->input->post('description');

        if ($this->input->post('name') != "" && $studentID != "") {
            $course = array('name' => $name, 'studentID' => $studentID,'status'=>'none','country' => $this->input->post('country'), 'location' => $this->input->post('location'), 'start' => $start, 'end' => $end, 'participants' => $participants, 'objective' => $objective, 'role' => $role, 'description' => $description, 'dos' => date('Y-m-d'));
            $this->Md->save($course, 'course');

            $this->session->set_flashdata('msg', '<div class="alert alert-success"> <strong>
                                               Course information saved</strong>									
						</div>');

            redirect('/student/course', 'refresh');
        }

        $query = $this->Md->get('studentID', $studentID, 'course');
        if ($query) {
            $data['out'] = $query;
        } else {
            $data['out'] = array();
        }

        $this->load->view('student-course', $data);
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
