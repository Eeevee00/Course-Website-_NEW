<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
		$this->load->helper('url');
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->library('grocery_CRUD');
		$this->load->model('Students_model');


	}

	public function index(){
		$user = $this->ion_auth->user()->row();
		$studentNum = $user->studentNum;
		$data = array('studentNum' => $studentNum);

		$this->load->view('header-user-logged.php');
		$this->load->view('content-main-user.php',$data);
		$this->load->view('footer.php');
	}

  public function output_table($output = null)
  {
    $this->load->view('header-admin-logged.php');
    $this->load->view('crud.php',(array)$output);
    $this->load->view('footer-no-js.php');

  }

	public function output_table_user($output = null)
  {
    $this->load->view('header-user-logged.php');
    $this->load->view('crud.php',(array)$output);
    $this->load->view('footer-no-js.php');

  }

  public function view_students(){
    $crud = new grocery_CRUD();
		// $S1 = new Students_model();

		// $studentNum = $this->Students_model->s_studentNum;

    $crud->set_table('student');

    $crud->set_subject('Student');
		// $crud->where("student.studentName = '$studentNum'");
		// $crud->unset_add();

    $output = $crud->render();
    $this->output_table($output);


  }

	public function view_student(){
		$crud = new grocery_CRUD();
		$S1 = new Students_model();
		$studentNum = $S1->getStudentNum();



		$crud->set_table('student');
		$crud->set_subject('Profile Info');
		$crud->columns('studentNum','studentName','studentEmail','studentPhone','studentAddress','studentCity','studentState','studentPostal','currentCGPA','semester');
		$crud->where("student.studentName = '".$studentNum."'");

		$crud->display_as('studentNum','Matric No');
		$crud->display_as('studentName','Name');
		$crud->display_as('studentEmail','Email');
		$crud->display_as('studentPhone','Phone No.');
		$crud->display_as('studentAddress','Address');
		$crud->display_as('studentCity','City');
		$crud->display_as('studentState','State');
		$crud->display_as('studentPostal','Postal Code');
		$crud->display_as('currentCGPA','CGPA');

		$crud->field_type('studentNum','readonly');
		$crud->field_type('studentName','readonly');
		$crud->field_type('studentEmail','readonly');
		$crud->field_type('currentCGPA','readonly');
		$crud->field_type('semester','readonly');

		$crud->unset_add();
		$crud->unset_back_to_list();


		$output = $crud->render();
		$this->output_table_user($output);


	}

	public function course_registered(){
		$crud = new grocery_CRUD();
		$S1 = new Students_model();
		$studentNum = $S1->getStudentNum();
		// $studentNum = $this->Students_model->s_studentNum;
    $crud->set_table('registeredcourse');
    $crud->set_subject('Course');
		$crud->where("registeredcourse.studentNum = '".$studentNum."'");

		$crud->unset_clone();
		$crud->unset_delete();
		$crud->unset_edit();
		$crud->unset_export();
		$crud->unset_print();

		$crud->columns('applicationID','courseCode','sectionID');
		$crud->display_as('courseCode','Course Code');
		$crud->display_as('applicationID','Application Number');
		$crud->display_as('sectionID','Section');
		$crud->set_relation('applicationID','studentapplication','applicationID',array('studentNum' => $studentNum));
		$crud->set_relation('studentNum','student','studentNum',array('studentNum' => $studentNum));
		$crud->set_relation('courseCode','course','courseCode');
		$crud->set_relation('sectionID','coursesection','sectionID');



    $output = $crud->render();
    $this->output_table_user($output);
	}

	public function student_profile(){
		$this->load->helper('url');

		$S1 = new Students_model();
		$studentNum = $S1->getStudentNum();


    redirect("http://localhost/group-project/index.php/Students/view_student/edit/$studentNum");
	}


	public function student_finance(){
		$crud = new grocery_CRUD();
		$S1 = new Students_model();
		$studentNum = $S1->getStudentNum();



		$crud->set_table('studentfeerecord');
		$crud->set_subject('My Finance');
		$crud->columns('liabilityID','issueDate','remark','credit','debit');
		$crud->where("studentfeerecord.studentNum = '$studentNum'");
		$crud->display_as('liabilityID', 'Transaction Number');
		$crud->display_as('issueDate', 'Date Issued');
		$crud->display_as('remark', 'Remarks');


		$crud->unset_clone();
		$crud->unset_delete();
		$crud->unset_edit();
		$crud->unset_add();
		$crud->unset_export();
		$crud->unset_print();


		$output = $crud->render();
		$this->output_table_user($output);
	}


	public function view_examdate(){
		$crud = new grocery_CRUD();



		$crud->set_table('examdate');
		$crud->set_subject('Exam Date');
		$crud->columns('examID','courseCode','dateOfExam');
		// $crud->where("studentresult.studentNum = '$studentNum'");
		$crud->display_as('courseCode', 'Course Code');


		$crud->display_as('dateOfExam', 'Exam Date');



		$crud->unset_clone();
		$crud->unset_delete();
		$crud->unset_edit();
		$crud->unset_add();
		$crud->unset_export();
		$crud->unset_print();


		$output = $crud->render();
		$this->output_table_user($output);
}
		public function student_result(){
			$crud = new grocery_CRUD();
			$S1 = new Students_model();
			$studentNum = $S1->getStudentNum();



			$crud->set_table('studentresult');
			$crud->set_subject('My Grade');
			$crud->columns('courseCode','gradeID','overAllGPA','overAllCGPA');
			$crud->where("studentresult.studentNum = '$studentNum'");
			$crud->display_as('courseCode', 'Course Code');


			$crud->display_as('gradeID', 'Grade');
			$crud->display_as('overAllGPA', 'overall GPA');
			$crud->display_as('overAllCGPA', 'overall CGPA');



			$crud->unset_clone();
			$crud->unset_delete();
			$crud->unset_edit();
			$crud->unset_add();
			$crud->unset_export();
			$crud->unset_print();




			$output = $crud->render();
			$this->output_table_user($output);
	}
	public function student_results(){
		$crud = new grocery_CRUD();


		$crud->set_table('studentresult');
		$crud->set_subject('Student Results');
		$crud->unset_clone();



		$crud->set_relation('courseCode','course','courseCode');
		$crud->set_relation('gradeID','grade','gradeID');
		$crud->set_relation('studentNum','student','studentNum');

		$output = $crud->render();
		$this->output_table($output);
}
}
