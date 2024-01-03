<?php
  class Students_model extends CI_Model {


    private $s_studentName;
    private $s_studentEmail;
    private $s_studentPhone;
    private $s_studentAddress;
    private $s_studentCity;
    private $s_studentState;
    private $s_studentPostal;
    private $s_currentCGPA;
    private $s_semester;
    private $s_studentNum;


    public function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library(['ion_auth', 'form_validation']);
      $this->load->helper(['url', 'language']);
      $this->load->library('grocery_CRUD');
    }


    public function getStudentNum(){
      $user = $this->ion_auth->user()->row()->studentNum;
      return $user;
    }

    public function getStudentID(){
      $user = $this->ion_auth->user()->row()->id;

      return $user;
    }


  }
?>
