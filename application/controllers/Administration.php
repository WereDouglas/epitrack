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
       
}
