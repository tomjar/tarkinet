<?php
class Company_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_all_companies()
		{
			$query = $this->db->get('Company');
			return $query->result_array();
		}
		
		public function get_company($companyid)
		{				
				$query = $this->db->get_where('Company', array('CompanyID' => $companyid));
				return $query->result_array();
		}
		
		public function create_company()
		{
			$this->load->helper('date');
			date_default_timezone_set(@date_default_timezone_get());
			$datestringformat = "%Y-%m-%d";
			$time = time();
			$today = mdate($datestringformat, $time);
			$data = array(
				'CompanyName' => $this->input->post('companyname'),
				'CompanyDescription' => $this->input->post('companydesc'),
				'CompanyAddress' => $this->input->post('companyaddress'),
				'CompanyPhone' => $this->input->post('companyphone'),
				'CompanyCity' => $this->input->post('companycity'),
				'CompanyState' => $this->input->post('companystate'),
				'CompanyZipCode' => $this->input->post('companyzipcode'),
				'CreatedBy' => 'someone',
				'CreatedDate' => $today
			);

			return $this->db->insert('Company', $data);
		}
}