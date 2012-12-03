<?php

class Trackers extends MY_Controller
{
	public $models = array( 'tracker', 'value' );
	public $data = array();

	public function index()
	{
		$this->data['trackers'] = $this->tracker->get_all();
	}

	public function show($id)
	{
		$this->data['tracker'] = $this->tracker->get($id);
		$this->data['values'] = $this->value->get_many_by('tracker_id', $id);
	}
}