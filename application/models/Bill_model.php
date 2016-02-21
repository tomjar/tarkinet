<?php
class Bill_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_all_bills()
		{
				$query = $this->db->get('Bill');
				return $query->result_array();
		}
		
		public function get_bill($billid)
		{
			$query = $this->db->get_where('Bill', array('BillID' => $billid));
			return $query->result_array();
		}
		
		public function create_bill()
		{
			$this->load->helper('date');
			date_default_timezone_set(@date_default_timezone_get());
			$datestringformat = "%Y-%m-%d";
			$time = time();
			$today = mdate($datestringformat, $time);
			$data = array(
				'BillName' => $this->input->post('billname'),
				'BillCost' => $this->input->post('billcost'),
				'BillDueDate' => $this->input->post('billduedate'),
				'IsBillAutoPayment' => $this->input->post('isbillautopayment'),
				'CompanyID' => $this->input->post('companyselect'),
				'IsBillPayed' => $this->input->post('isbillpayed'),
				'BillPayedDate' => $this->input->post('billpayeddate'),
				'CreatedBy' => 'someone',
				'CreatedDate' => $today
			);

			return $this->db->insert('Bill', $data);
		}
}