<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $this->load->view('management-home');
    }

    public function tracks() {

        $this->load->helper(array('form', 'url'));
        $action = $this->uri->segment(3);

        if ($action == 'delete') {
            $id = $this->uri->segment(4);
            $query = $this->MD->delete($id, 'track');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 track deleted	</strong>									
						</div>');

            redirect('/management/tracks', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $track = $this->input->post('track');
            $id = $this->input->post('id');
            $track = array('track' => $track);
            $this->MD->update($id, $track, 'track');
        }


        $this->load->helper(array('form', 'url'));

        $track = $this->input->post('track');
        if ($track != "") {
            $get_result = $this->MD->check($track, 'track', 'track');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 track already registered	</strong>									
						</div>');
                redirect('/management/tracks', 'refresh');
            }
            $tracks = array('track' => $track, 'created' => date('Y-m-d'));
            $this->MD->save($tracks, 'track');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 track saved</strong>									
						</div>');

            redirect('/management/tracks', 'refresh');
        } else {
            $query = $this->MD->show('track');
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
            $id = $this->uri->segment(4);
            $query = $this->MD->delete($id, 'cohort');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Cohort deleted	</strong>									
						</div>');

            redirect('/management/tracks', 'refresh');
        }
        if ($action == 'update') {

            $this->load->helper(array('form', 'url'));

            $name = $this->input->post('name');
            $id = $this->input->post('id');
            $cohort = array('name' => $name);
            $this->MD->update($id, $cohort, 'cohort');
        }


        $this->load->helper(array('form', 'url'));

        $name = $this->input->post('name');
        if ($name != "") {
            $track = $this->input->post('track');
            $startyear = $this->input->post('year');
            
            $get_result = $this->MD->check($name, 'name', 'cohort');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 cohort already registered	</strong>									
						</div>');
                redirect('/management/cohort', 'refresh');
            }
            $cohort = array('name' => $name,'track' => $track ,'year' => $startyear,'created' => date('Y-m-d'));
            $this->MD->save($cohort, 'cohort');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 cohort saved</strong>									
						</div>');

            redirect('/management/cohort', 'refresh');
        } else {
            $query = $this->MD->show('cohort');
            //  var_dump($query);
            if ($query) {
                $data['cohorts'] = $query;
            } else {
                $data['cohorts'] = array();
            }
             $query = $this->MD->show('track');
            //  var_dump($query);
            if ($query) {
                $data['tracks'] = $query;
            } else {
                $data['tracks'] = array();
            }

            $this->load->view('cohort', $data);
        }
    }
    

    public function user() {
        $query = $this->MD->show('role');
        //  var_dump($query);
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }

        $this->load->view('user', $data);
    }

    public function station() {
        $this->load->view('station');
    }

    public function element() {
        $this->load->view('element');
    }

    public function instrument() {
        $this->load->view('instrument');
    }

    public function archive() {
        $this->load->view('archive');
    }

    public function schedule() {
        $this->load->view('schedule');
    }

    public function reports() {
        $this->load->view('reports');
    }

    public function form() {
        $this->load->view('form');
    }

    public function form4() {
        $this->load->view('form4');
    }

    public function dekadal() {
        $this->load->view('dekadal');
    }

    public function form5() {
        $this->load->view('form5');
    }

    public function summary() {
        $this->load->view('summary');
    }

    public function metar() {
        $this->load->view('metar');
    }

    public function rainfall() {
        $this->load->view('rainfall');
    }

    public function climatological() {
        $this->load->view('climatological');
    }

}
