<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {
	public function index() {
		$this->load->view('page_header');
		$this->load->view('map_all');
		$this->load->view('page_footer');

	}
	public function zone($z) {
		if(empty($z) || !in_array($z, array(1,2,3,4,5,6,7,8))) {
			redirect(base_url().'map');
		}
		$this->load->view('page_header');
		$data = array(
			'zone'      => $z
		);
		$this->load->view('map_zone',$data);
		$this->load->view('page_footer');
	}
}
