<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zone extends CI_Controller {
	public function index() {
		$this->load->view('page_header');
		$stats = $this->ZoneModel->stats();
		$data = array(
			'stats'      => $stats
		);
		$this->load->view('zone_stats',$data);
		$this->load->view('page_footer');
	}
	public function detail($zone_id) {
		if(empty($zone_id)) {
			redirect(base_url());
		}
		$this->load->view('page_header');
		$zone = $this->ZoneModel->getZoneDetail($zone_id);
		if(empty($zone)) {
			redirect(base_url());
		}
		$data['zone']  = $zone;
		$zone2 = $this->ZoneModel->getZoneAdvisor($zone_id);

		$data['advisor']  = $zone2;

		$this->load->view('zone_detail',$data);
		$this->load->view('page_footer');
	}
}
