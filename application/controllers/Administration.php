<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {

	 function __construct() {

        parent::__construct();
       // error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
        $this->load->library('encrypt');
    }
	public function index()
	{
  
		$this->load->view('admin/index');
	}
        public function login()
	{
		$this->load->view('home');
	}
         public function user()
	{
              $query = $this->MD->show('role');
      //  var_dump($query);
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        

        $this->load->view('user', $data);
			}
         public function station()
	{
		$this->load->view('station');
	}
         public function element()
	{
		$this->load->view('element');
	}
        public function instrument()
	{
		$this->load->view('instrument');
	}
        public function archive()
	{
		$this->load->view('archive');
	}
         public function schedule()
	{
		$this->load->view('schedule');
	}
        public function reports()
	{
		$this->load->view('reports');
	}
         public function form()
	{
		$this->load->view('form');
	}
         public function form4()
	{
		$this->load->view('form4');
	}
         public function dekadal()
	{
		$this->load->view('dekadal');
	}
          public function form5()
	{
		$this->load->view('form5');
	}
         public function summary()
	{
		$this->load->view('summary');
	}
         public function metar()
	{
		$this->load->view('metar');
	}
          public function rainfall()
	{
		$this->load->view('rainfall');
	}
         public function climatological()
	{
		$this->load->view('climatological');
	}
}
