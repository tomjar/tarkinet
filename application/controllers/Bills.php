<?php
class Bills extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Bill_model');
				
				// load company model so we can call methods and retrieve all companies
				$this->load->model('Company_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['Bills'] = $this->Bill_model->get_all_bills();
				$data['title'] = 'List of Bills';
				$this->load->view('templates/header', $data);
				$this->load->view('bills/index', $data);
				$this->load->view('templates/footer');
        }

		public function view($billid)
		{
				$data['bill_item'] = $this->Bill_model->get_bill($billid);

				if (empty($data['bill_item']))
				{
						show_404();
				}

				$data['title'] = $data['bill_item'][0]['BillName'];

				$this->load->view('templates/header', $data);
				$this->load->view('bills/view', $data);
				$this->load->view('templates/footer');
		}
		
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			// make all companies available so that we can view them in a drop down
			$data['Companies'] = $this->Company_model->get_all_companies();
			$data['title'] = 'Create new bill';
			$this->form_validation->set_rules('billname', 'BillName', 'required');
			$this->form_validation->set_rules('billcost', 'BillCost', 'required');
			$this->form_validation->set_rules('billduedate', 'BillDueDate', 'required');
			$this->form_validation->set_rules('isbillautopayment', 'IsBillAutoPayment', 'required');
			$this->form_validation->set_rules('companyselect', 'CompanyID', 'required');
			$this->form_validation->set_rules('isbillpayed', 'IsBillPayed', 'required');
			$this->form_validation->set_rules('billpayeddate', 'BillPayedDate', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('bills/create');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->Bill_model->create_bill();
				redirect('/bills/', 'location', 301);
			}
		}


}