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
                $data['Companies'] = $this->Company_model->get_companies();
				$data['title'] = 'List of Companies';
				$this->load->view('templates/header', $data);
				$this->load->view('companies/index', $data);
				$this->load->view('templates/footer');
        }

		public function view($companyid = 1)
		{
				$data['company_item'] = $this->company_model->get_companies($companyid);

				if (empty($data['company_item']))
				{
						show_404();
				}

				$data['companyname'] = $data['company_item']['companyname'];

				$this->load->view('templates/header', $data);
				$this->load->view('companies/view', $data);
				$this->load->view('templates/footer');
		}


}