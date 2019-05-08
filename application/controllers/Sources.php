<?php
class Sources extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('source_model');
        }

	public function index()
	{

		$sources = $this->source_model->get_sources();
		$this->output
			->set_content_type("application/json")
			->set_output(json_encode($sources));
	}
}
