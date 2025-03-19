<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function index() {
		$this->load->view('page_header');
		$companies = $this->CompanyModel->listCompanies();
		$data = array(
			'companies'      => $companies
		);
		$this->load->view('company_list',$data);
		$this->load->view('page_footer');
	}
	public function detail($com_id) {
		if(empty($com_id)) {
			redirect(base_url());
		}
		$this->load->view('page_header');
		$company = $this->CompanyModel->getCompanyDetail($com_id);
		if(empty($company)) {
			redirect(base_url());
		}
		$data['company']  = $company;
		$this->load->view('company_detail',$data);
		$this->load->view('page_footer');
	}
}
