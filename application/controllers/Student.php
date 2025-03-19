<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index() {
    $this->load->view('page_header');
    $students = $this->StudentModel->listStudents();
    		$data = array(
    			'students'      => $students
    		);
    		$this->load->view('student_list',$data);
    		$this->load->view('page_footer');
    }
	public function room($room) {
		if(empty($room)) {
			redirect(base_url());
		}
		$this->load->view('page_header');
		$students = $this->StudentModel->listStudentsByRoom($room);
		if(empty($students)) {
			redirect(base_url());
		}
		$data = array(
			'students'      => $students
		);
		$this->load->view('student_list',$data);
		$this->load->view('page_footer');
	}
}
