<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
		$this->load->helper('url');
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->library('grocery_CRUD');
	}

  public function output_table($output = null)
  {
    $this->load->view('header-admin-logged.php');
    $this->load->view('crud.php',(array)$output);
    $this->load->view('footer-no-js.php');
  }

  public function view_examdate(){
    $crud = new grocery_CRUD();


    $crud->set_table('examdate');
    $crud->set_subject('Exam Date');
    $crud->set_relation('courseCode', 'course', 'courseCode');
    $crud->set_relation('locationID', 'location', 'locationID');




    $output = $crud->render();
    $this->output_table($output);


  }
}
