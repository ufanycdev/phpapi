<?php
class Contents extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('content_model');
        }

	public function view($id) {
		$content = $this->content_model->get_content($id);
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($content));
	}

	public function search($term) {
                $contents = $this->content_model->search_contents($term);
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($contents));
	}

        public function daily_events($year, $month, $day)
        {
                $contents = $this->content_model->get_daily_events($year, $month, $day);
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($contents));
	}

        public function monthly_events($year, $month)
        {
                $contents = $this->content_model->get_monthly_events($year, $month);
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($contents));
	}

        public function catyear($categoryId, $year)
        {
                $contents = $this->content_model->get_contents($categoryId, $year);
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($contents));
	}
}
?>
