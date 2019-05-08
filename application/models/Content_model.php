<?php
class Content_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

	public function search_contents($term)
	{
		$this->db->or_like(array('long_content' => $term, 'short_content' => $term, 'name' => $term));
		$query = $this->db->get("contents");
		return $query->result_array();
		
	}

	private function searchEvents($whereClause) {
		$query = $this->db->query("select * from cms_contents where category_id = 4 and (${whereClause}) order by start_date");
		return $query->result_array();
	}

	private function dailyEventsFor($dateString){
		return $this->searchEvents("end_date >= \"${dateString}\" and start_date <= \"${dateString}\"");
	}

	private function monthlyEventsFor($dateString){
		return $this->searchEvents("end_date >= \"${dateString}-01\" and start_date <= \"${dateString}-31\"");
	}


	public function get_daily_events($year, $month, $day)
	{	
		$dateString = "${year}-${month}-${day}";
		$events = $this->dailyEventsFor($dateString);
		return array('day' => $day, 'month' => $month, 'year' => $year, 'dateString' => $dateString, 'events' => $events);
	}

	public function get_monthly_events($year, $month)
	{
		$dateString = "${year}-${month}";
		$events = $this->monthlyEventsFor($dateString);
		return array('month' => $month, 'year' => $year, 'dateString' => $dateString, 'events' => $events);
	}

	public function get_content($id)
	{
		$query = $this->db->get_where('contents', array('id' => $id));
		return $query->row_array();
	}

	public function get_contents($categoryId, $year)
	{
		$this->db->select(array("id", "category_id", "subcategory_id", "name", "short_content", "date"));
		$this->db->like('date', $year);
		
		$query = $this->db->get_where("contents", array('category_id' => intval($categoryId)));
		return $query->result_array();
	}
}

?>
