<?php
class Company_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_companies($companyid = 1)
{
				$query = $this->db->get('Company');
				return $query->result_array();
		}
}