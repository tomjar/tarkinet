<?php
class Bills extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Bill_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['Bills'] = $this->Bill_model->get_bills();
				$data['title'] = 'List of Bills';
				$this->load->view('templates/header', $data);
				$this->load->view('bills/index', $data);
				$this->load->view('templates/footer');
        }

		public function view($billid = 1)
		{
				$data['bill_item'] = $this->bill_model->get_bills($billid);

				if (empty($data['bill_item']))
				{
						show_404();
				}

				$data['billname'] = $data['bill_item']['billname'];

				$this->load->view('templates/header', $data);
				$this->load->view('bills/view', $data);
				$this->load->view('templates/footer');
		}


}