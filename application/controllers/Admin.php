<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
		$this->load->helper('url');
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->library('grocery_CRUD');


	}

  public function index(){
    $this->load->view('header-admin-logged.php');
    $this->load->view('content-main-admin.php');
    $this->load->view('footer.php');
  }


}
