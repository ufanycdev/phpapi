<?php
class Source_model extends CI_Model {
        public function __construct()
        {
                $this->load->database();
        }

	public function get_sources()
	{
		$query = $this->db->get('sources');
		return $query->result_array();
	}
}

?>
