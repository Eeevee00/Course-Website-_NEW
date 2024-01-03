<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_Complaint extends CI_Controller {

    public function index()
    {

        $this->load->library('form_validation');
        $this->load->view("header-user-logged.php");
        $this->load->view("file_complaint.php");
        $this->load->view("footer.php");
    }
    function savingdata()
    {
      $this->load->library('form_validation');
      $this->load->helper("form");
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $formID = $this->input->post('type');

      if($formID == "Feedback"){
        $formID = '901';
      }else{
        $formID = '902';
      }

      $studentNum = $this->input->post('studentNum');

    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
    $this->form_validation->set_rules('type','Feedback Type','trim|required');
    $this->form_validation->set_rules('studentNum','Matric Number','trim|required');
    $this->form_validation->set_rules('formContent','Feedback/Complaint','trim|required');

        $data = array(
                        'email'         => $this->input->post('email'),
                        'formID'        => $formID,
                        'formContent'   => $this->input->post('formContent'),
                        'studentNum'     => strtoupper($studentNum)
                        );

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view("header-user-logged.php");
                        $this->load->view('file_complaint.php');
                        $this->load->view("footer.php");

                }
                else
                {
                  $this->db->insert('feedbackcomplaint',$data);
                  $successMessage = "Your Feedback was Successfully Submitted";
                  $data = array('successMessage' => $successMessage);


                  $this->load->view("header-user-logged.php");
                  $this->load->view("file_complaint.php",$data);
                  $this->load->view("footer.php");
                }




    }
}
?>
