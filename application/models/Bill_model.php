<?php
class Bill_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_bills($billid = 1)
{
				$query = $this->db->get('Bill');
				return $query->result_array();
		}
}