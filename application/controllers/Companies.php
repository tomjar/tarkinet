<?php
class Companies extends CI_Controller {

        public function __construct()
        {
			parent::__construct();
			$this->load->model('Company_model');
			$this->load->helper('url_helper');
        }

        public function index()
        {
			$data['Companies'] = $this->Company_model->get_all_companies();
			$data['title'] = 'List of Companies';
			$this->load->view('templates/header', $data);
			$this->load->view('companies/index', $data);
			$this->load->view('templates/footer');
        }

		public function view($companyid)
		{
			$data['company_item'] = $this->Company_model->get_company($companyid);
			if (empty($data['company_item']))
			{
					show_404();
			}

			$data['title'] = $data['company_item'][0]['CompanyName'];
			$data['CompanyName'] = $data['company_item'][0]['CompanyName'];

			$this->load->view('templates/header', $data);
			$this->load->view('companies/view', $data);
			$this->load->view('templates/footer');
		}
		
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['title'] = 'Create new company';
			$this->form_validation->set_rules('companyname', 'CompanyName', 'required');
			$this->form_validation->set_rules('companydesc', 'CompanyDescription', 'required');
			$this->form_validation->set_rules('companyaddress', 'CompanyAddress', 'required');
			$this->form_validation->set_rules('companyphone', 'CompanyPhone', 'required');
			$this->form_validation->set_rules('companycity', 'CompanyCity', 'required');
			$this->form_validation->set_rules('companystate', 'CompanyState', 'required');
			$this->form_validation->set_rules('companyzipcode', 'CompanyZipCode', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('companies/create');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->Company_model->create_company();
				redirect('/companies/', 'location', 301);
			}
		}


}